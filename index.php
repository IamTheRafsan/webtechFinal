<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .benefits {
            display: flex;
            overflow-x: auto;
            padding: 10px;
            white-space: nowrap;
            gap: 15px;
            scroll-behavior: smooth;
        }

        .book {
            display: inline-block;
            flex-shrink: 0;
            width: 150px;
            text-align: center;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .book img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .book p {
            margin: 5px 0;
        }

        .scroll-buttons {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .scroll-buttons button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .scroll-buttons button:hover {
            background-color: #0056b3;
        }
        
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="https://www.digitalrangersbd.com/wp-content/uploads/2024/11/id.png" style="margin-left: 520px;">
    <div class="page">
        <div class="leftsidebar">

            <?php
                $conn = new mysqli("localhost", "root", "", "webtech");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
    
                $sql = "SELECT used_token_number FROM used_token";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<p>Used Tokens</p>";
                    
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>{$row['used_token_number']} </p>";
                    }
                    
                    echo "</ul>";
                } else {
                    echo "<p>No used tokens available</p>";
                }
                $conn->close();
            ?>
            

        </div>
        <div class="content">
            <div class="hero">
                Hero Section
            </div>
            <div class="about">
                About Section
            </div>
            <div class="benefits">
            <?php
            $conn = new mysqli("localhost", "root", "", "webtech");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT id, book_name, author, image FROM books";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='book'>";
                    echo "<img src='{$row['image']}' alt='{$row['book_name']}'>";
                    echo "<p><strong>{$row['book_name']}</strong></p>";
                    echo "<p>{$row['author']}</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No books available</p>";
            }

            $conn->close();
            ?>
            </div>
            <div class="review">
                Review Section
            </div>
            <div class="contact">
                
                <div class="info">Book Register
                    <form id="book_form" class="bookForm" action="process.php" method="post" ">
                        <br><label for="name">Ful Name: </label>
                        <input type="text" id="fullName" name="fullName">
                        <br><label for="name">Student Id: </label>
                        <input type="text" id="id" name="id">
                        <br><label for="email">E-mail: </label>
                        <input type="email" id="email" name="email">
                        <br><label for="books">Choose Book: </label>
                        <select id="books" name="books" class="customSelector">
                        <?php
                                $conn = new mysqli("localhost", "root", "", "webtech");

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT book_name FROM books";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='{$row['book_name']}'>{$row['book_name']}</option>";
                                    }
                                } else {
                                    echo "<option value=''>No books available</option>";
                                }

                                $conn->close();
                            ?>
                        </select><br>
                        <br><label for="Token">Token Number: </label>
                        <input type="text" id="token" name="token">
                        <br><label for="borrowDate">Borrow Date: </label>
                        <input type="date" id="borrowDate" name="borrowDate">
                        <br><label for="returnDate">Return Date: </label>
                        <input type="date" id="returnDate" name="returnDate">
                        <input type="submit" id="submit" name="submit" onclick="setTimeout(() => document.getElementById('book_form').reset(), 50);">

                    </form>
                </div>
                <div class="form">
                <div class="form">

                    <?php
                    require_once 'readToken.php';
                    
                    $tokens = readUnusedTokens();

                    if(!empty($tokens)){

                        echo "<p>Tokens</p>";
                        
                        foreach($tokens as $token){
                            echo "<p>$token</p>";
                        }
                    } else {
                        echo "<p>No tokens available</p>";
                    }

                    ?>
                </div>


                </div>
            </div>
        </div>
        <div class="rightsidebar">
            Right Sidebar
        </div>
    </div>
    
</body>
</html>