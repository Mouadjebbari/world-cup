<?php
    if (isset($_POST['action'])){
    // get the user input from the form
    $team1Score = $_POST['team1Score'];
    $team2Score = $_POST['team2Score'];
    $team3Score = $_POST['team3Score'];
    $team4Score = $_POST['team4Score'];

    // calculate the points and goal difference for each team
    $team1Points = 0;
    $team1GoalsScored = 0;
    $team1GoalsConceded = 0;
    $team1MatchesPlayed = 0;
    $team1MatchesWon = 0;
    $team1MatchesTied = 0;
    $team1MatchesLost = 0;

    $team2Points = 0;
    $team2GoalsScored = 0;
    $team2GoalsConceded = 0;
    $team2MatchesPlayed = 0;
    $team2MatchesWon = 0;
    $team2MatchesTied = 0;
    $team2MatchesLost = 0;

    $team3Points = 0;
    $team3GoalsScored = 0;
    $team3GoalsConceded = 0;
    $team3MatchesPlayed = 0;
    $team3MatchesWon = 0;
    $team3MatchesTied = 0;
    $team3MatchesLost = 0;

    $team4Points = 0;
    $team4GoalsScored = 0;
    $team4GoalsConceded = 0;
    $team4MatchesPlayed = 0;
    $team4MatchesWon = 0;
    $team4MatchesTied = 0;
    $team4MatchesLost = 0;

    // calculate points and goal difference for each match
    if ($team1Score > $team2Score) {
        $team1Points += 3;
        $team1GoalsScored += $team1Score;
        $team1GoalsConceded += $team2Score;
        $team1MatchesPlayed++;
        $team1MatchesWon++;
        $team2MatchesPlayed++;
        $team2MatchesLost++;
    } else if ($team1Score < $team2Score) {
        $team2Points += 3;
        $team2GoalsScored += $team2Score;
        $team2GoalsConceded += $team1Score;
        $team1MatchesPlayed++;
        $team1MatchesLost++;
        $team2MatchesPlayed++;
        $team2MatchesWon++;
    } else {
        $team1Points += 1;
        $team2Points += 1;
        $team1GoalsScored += $team1Score;
        $team1GoalsConceded += $team2Score;
        $team2GoalsScored += $team2Score;
        $team2GoalsConceded += $team1Score;
        $team1MatchesPlayed++;
        $team1MatchesTied++;
        $team2MatchesPlayed++;
        $team2MatchesTied++;
    
    }  

    //  team3 AND 4
    if ($team3Score > $team4Score) {
        $team3Points += 3;
        $team3GoalsScored += $team3Score;
        $team3GoalsConceded += $team4Score;
        $team3MatchesPlayed++;
        $team3MatchesWon++;
        $team4MatchesPlayed++;
        $team4MatchesLost++;
    } else if ($team3Score < $team4Score) {
        $team4Points += 3;
        $team4GoalsScored += $team4Score;
        $team4GoalsConceded += $team3Score;
        $team3MatchesPlayed++;
        $team3MatchesLost++;
        $team4MatchesPlayed++;
        $team4MatchesWon++;
    } else {
        $team3Points += 1;
        $team4Points += 1;
        $team3GoalsScored += $team3Score;
        $team3GoalsConceded += $team4Score;
        $team4GoalsScored += $team4Score;
        $team4GoalsConceded += $team3Score;
        $team3MatchesPlayed++;
        $team3MatchesTied++;
        $team4MatchesPlayed++;
        $team4MatchesTied++;
    }

    // repeat for other matches

    // sort teams by points, goal difference, goals scored
    $teams = array(
        array("Team 1", $team1Points, $team1GoalsScored - $team1GoalsConceded, $team1GoalsScored, $team1MatchesPlayed, $team1MatchesWon, $team1MatchesTied, $team1MatchesLost, $team1GoalsScored, $team1GoalsConceded),
        array("Team 2", $team2Points, $team2GoalsScored - $team2GoalsConceded, $team2GoalsScored, $team2MatchesPlayed, $team2MatchesWon, $team2MatchesTied, $team2MatchesLost, $team2GoalsScored, $team2GoalsConceded),
        array("Team 3", $team3Points, $team3GoalsScored - $team3GoalsConceded, $team3GoalsScored, $team3MatchesPlayed, $team3MatchesWon, $team3MatchesTied, $team3MatchesLost, $team3GoalsScored, $team3GoalsConceded),
        array("Team 4", $team4Points, $team4GoalsScored - $team4GoalsConceded, $team4GoalsScored, $team4MatchesPlayed, $team4MatchesWon, $team4MatchesTied, $team4MatchesLost, $team4GoalsScored, $team4GoalsConceded)
    );

    usort($teams, function($a, $b) {
        if ($a[1] == $b[1]) {
            if ($a[2] == $b[2]) {
                return $b[3]
                - $a[3];
            }
            return $b[2] - $a[2];
        }
        return $b[1] - $a[1];
    });
    
    // display the table of results
    
}
?>























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="home.php">
        <label for="team1Score">Team 1 Score:</label>
        <input type="number" id="team1Score" name="team1Score" value="0">
        <label for="team2Score">Team 2 Score:</label>
        <input type="number" id="team2Score" name="team2Score" value="0"><br>
        <label for="team3Score">Team 3 Score:</label>
        <input type="number" id="team3Score" name="team3Score">
        <label for="team4Score">Team 4 Score:</label>
        <input type="number" id="team4Score" name="team4Score"><br><br>

        <button type="submit" id="simuler" name="action">Simuler</button>
    </form>
    <div>
        <?php
        if (isset($_POST['action'])){
        echo "<table>";
        echo "<tr><th>Team</th><th>Points</th><th>Goal Difference</th><th>Goals Scored</th><th>Matches Played</th><th>Matches Won</th><th>Matches Tied</th><th>Matches Lost</th><th>Goals Scored</th><th>Goals Conceded</th></tr>";
        foreach ($teams as $team) {
            echo "<tr>";
            echo "<td>" . $team[0] . "</td>";
            echo "<td>" . $team[1] . "</td>";
            echo "<td>" . $team[2] . "</td>";
            echo "<td>" . $team[3] . "</td>";
            echo "<td>" . $team[4] . "</td>";
            echo "<td>" . $team[5] . "</td>";
            echo "<td>" . $team[6] . "</td>";
            echo "<td>" . $team[7] . "</td>";
            echo "<td>" . $team[8] . "</td>";
            echo "<td>" . $team[9] . "</td>";
            echo "</tr>";
        }
        echo "</table>"; 
    }
        ?>
    </div>
    <!-- <style>
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #c32e2e;
    text-align: left;
    padding: 8px;
    }

    th {
    background-color: #c32e2e;
    }
    </style> -->
</body>
</html>