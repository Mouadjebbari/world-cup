<?php
    // get the user input from the form
    $team1Score = $_POST['team1Score'];
    $team2Score = $_POST['team2Score'];
    $team3Score = $_POST['team3Score'];
    $team4Score = $_POST['team4Score'];

    // calculate the points and goal difference for each team
    $team1Points = 0;
    $team1GoalsScored = 0;
    $team1GoalsConceded = 0;

    $team2Points = 0;
    $team2GoalsScored = 0;
    $team2GoalsConceded = 0;

    $team3Points = 0;
    $team3GoalsScored = 0;
    $team3GoalsConceded = 0;

    $team4Points = 0;
    $team4GoalsScored = 0;
    $team4GoalsConceded = 0;

    // calculate points and goal difference for each match
    if ($team1Score > $team2Score) {
        $team1Points += 3;
        $team1GoalsScored += $team1Score;
        $team1GoalsConceded += $team2Score;
    } else if ($team1Score < $team2Score) {
        $team2Points += 3;
        $team2GoalsScored += $team2Score;
        $team2GoalsConceded += $team1Score;
    } else {
        $team1Points += 1;
        $team2Points += 1;
        $team1GoalsScored += $team1Score;
        $team1GoalsConceded += $team2Score;
        $team2GoalsScored += $team2Score;
        $team2GoalsConceded += $team1Score;
    }

    if ($team3Score > $team4Score) {
        $team3Points += 3;
        $team3GoalsScored += $team3Score;
        $team3GoalsConceded += $team4Score;
    } else if ($team3Score < $team4Score) {
        $team4Points += 3;
        $team4GoalsScored += $team4Score;
        $team4GoalsConceded += $team3Score;
    } else {
        $team3Points += 1;
        $team4Points += 1;
        $team3GoalsScored += $team3Score;
        $team3GoalsConceded += $team4Score;
        $team4GoalsScored += $team4Score;
        $team4GoalsConceded += $team3Score;
    }

    // repeat for other matches

    // sort teams by points, goal difference, goals scored
    $teams = array(
        array("Team 1", $team1Points, $team1GoalsScored - $team1GoalsConceded, $team1GoalsScored),
        array("Team 2", $team2Points, $team2GoalsScored - $team2GoalsConceded, $team2GoalsScored),
        array("Team 3", $team3Points, $team3GoalsScored - $team3GoalsConceded, $team3GoalsScored),
        array("Team 4", $team4Points, $team4GoalsScored - $team4GoalsConceded, $team4GoalsScored)
    );

    usort($teams, function($a, $b) {
        if ($a[1] == $b[1]) {
            if ($a[2] == $b[2]) {
                return $b[3] - $a[3];
            }
            return $b[2] - $a[2];
        }
        return $b[1] - $a[1];
    });
    
    // display the table of results
    echo "<table>";
    echo "<tr><th>Team</th><th>Points</th><th>Goal Difference</th><th>Goals Scored</th></tr>";
    foreach ($teams as $team) {
        echo "<tr>";
        echo "<td>" . $team[0] . "</td>";
        echo "<td>" . $team[1] . "</td>";
        echo "<td>" . $team[2] . "</td>";
        echo "<td>" . $team[3] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>    
