﻿<!DOCTYPE html>
<html>

<head>
    <title>IGDb</title>
    <link href="style sheet/library.css" rel="stylesheet" />
</head>

<body>
    <div class="bg">
        <div class="bodyContainer">
            <?php include '../nav/navigation.php' ?>
            <div class="content">
                    <div class="gamesDisplay">
                            <div class="gameText">
                                <div id="allGamesName">User#1</div>
                                <div id="allGames">'s Library</div>
                                <div class="storeSortButton">
                                    <div class="sortButton">Filter
                                        <span class="sort-menu">
                                            <p class="sortbyDate">Newest first</p>
                                            <p class="sortbyPop">Most popular first</p>
                                            <p class="sortbyScore">Highest rated first</p>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        <div class=gamesContainer id="normalLib">
                            <div>
                                <div class="submitButtonContainer">
                                    <button id="submitButton" onclick="showEdit()" >Edit</button>
                                </div>
                            </div>
                            <div class="grid-container">
                                    <div class="grid-item">
                                        <span class="gameCover">
                                            <img src=pictures/game4.jpg width="200px" height="100px">
                                        </span>
                                        <span class="gameInfo">
                                            <div class="gameName">Game name #2</div>
                                            <div class="gameDescription">This is game1,
                                                ạdhskljfosdajflkasjfklsajfklsjfklasjfasjldf</div>
                                        </span>
                                    </div>
                            </div>
                        </div>
                        <!-- edit -->
                            <form method="post" class="gamesContainerEdit" id="normalLibEdit">
                            <div>
                                    <div class="submitButtonContainer">
                                        <button id="submitButton">Submit</button>
                                    </div>
                            </div>
                            <div class="grid-container">
                            <div class="grid-item">
                                <span class="gameCover">
                                    <img src=pictures/game4.jpg width="200px" height="100px">
                                </span>
                                <span class="gameInfo">
                                    <div class="gameName">Game name #1</div>
                                    <div class="gameOption">
                                        <label class="container">Playing
                                            <input type="radio" name="Game name #1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Completed
                                            <input type="radio" name="Game name #1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Plan to play
                                            <input type="radio" name="Game name #1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="container">Dropped
                                            <input type="radio" name="Game name #1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </span>
                            </div>


                        </div>
                        </form>
                        







            </div>
        </div>
    </div>
    <script src="javascript/jquery-3.3.1.js"></script>
    <script src="javascript/library.js"></script>
</body>

</html>