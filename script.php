<?php
    // obtenir l'entrée de l'utilisateur à partir du formulaire
    $team1Score = $_POST['team1Score'];
    $team2Score = $_POST['team2Score'];
    $team3Score = $_POST['team3Score'];
    $team4Score = $_POST['team4Score'];
    $team5Score = $_POST['team5Score'];
    $team6Score = $_POST['team6Score'];
    $team7Score = $_POST['team7Score'];
    $team8Score = $_POST['team8Score'];
    $team9Score = $_POST['team9Score'];
    $team10Score = $_POST['team10Score'];
    $team11Score = $_POST['team11Score'];
    $team12Score = $_POST['team12Score'];
    

    // calculer les points et la différence de buts pour chaque équipe
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

    $team5Points = 0;
    $team5GoalsScored = 0;
    $team5GoalsConceded = 0;
    $team5MatchesPlayed = 0;
    $team5MatchesWon = 0;
    $team5MatchesTied = 0;
    $team5MatchesLost = 0;

    $team6Points = 0;
    $team6GoalsScored = 0;
    $team6GoalsConceded = 0;
    $team6MatchesPlayed = 0;
    $team6MatchesWon = 0;
    $team6MatchesTied = 0;
    $team6MatchesLost = 0;
    
    $team7Points = 0;
    $team7GoalsScored = 0;
    $team7GoalsConceded = 0;
    $team7MatchesPlayed = 0;
    $team7MatchesWon = 0;
    $team7MatchesTied = 0;
    $team7MatchesLost = 0;

    $team8Points = 0;
    $team8GoalsScored = 0;
    $team8GoalsConceded = 0;
    $team8MatchesPlayed = 0;
    $team8MatchesWon = 0;
    $team8MatchesTied = 0;
    $team8MatchesLost = 0;

    $team9Points = 0;
    $team9GoalsScored = 0;
    $team9GoalsConceded = 0;
    $team9MatchesPlayed = 0;
    $team9MatchesWon = 0;
    $team9MatchesTied = 0;
    $team9MatchesLost = 0;

    $team10Points = 0;
    $team10GoalsScored = 0;
    $team10GoalsConceded = 0;
    $team10MatchesPlayed = 0;
    $team10MatchesWon = 0;
    $team10MatchesTied = 0;
    $team10MatchesLost = 0;

    $team11Points = 0;
    $team11GoalsScored = 0;
    $team11GoalsConceded = 0;
    $team11MatchesPlayed = 0;
    $team11MatchesWon = 0;
    $team11MatchesTied = 0;
    $team11MatchesLost = 0;

    $team12Points = 0;
    $team12GoalsScored = 0;
    $team12GoalsConceded = 0;
    $team12MatchesPlayed = 0;
    $team12MatchesWon = 0;
    $team12MatchesTied = 0;
    $team12MatchesLost = 0;


    
    // calculer les points et la différence de buts pour chaque match

    // MAROCA AND CROICIA
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

    //  BELGIQUA AND CANADA
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
    
    //  MAROCA AND BELGIQUA
    if ($team5Score > $team6Score) {
        $team5Points += 3;
        $team5GoalsScored += $team5Score;
        $team5GoalsConceded += $team6Score;
        $team5MatchesPlayed++;
        $team5MatchesWon++;
        $team6MatchesPlayed++;
        $team6MatchesLost++;
        
    } else if ($team5Score < $team6Score) {
        $team6Points += 3;
        $team6GoalsScored += $team6Score;
        $team6GoalsConceded += $team5Score;
        $team5MatchesPlayed++;
        $team5MatchesTied++;
        $team6MatchesLost++;
        
    } else {
        $team5Points += 1;
        $team6Points += 1;
        $team5GoalsScored += $team5Score;
        $team5GoalsConceded += $team6Score;
        $team6GoalsScored += $team6Score;
        $team6GoalsConceded += $team5Score;
        $team5MatchesPlayed++;
        $team5MatchesTied++;
        $team6MatchesPlayed++;
        $team6MatchesTied++;
    }
    
    //  CANADA AND CRIOICIA
    if ($team7Score > $team8Score) {
        $team7Points += 3;
        $team7GoalsScored += $team7Score;
        $team7GoalsConceded += $team8Score;
        $team7MatchesPlayed++;
        $team7MatchesWon++;
        $team8MatchesPlayed++;
        $team8MatchesLost++;
        
    } else if ($team7Score < $team8Score) {
        $team8Points += 3;
        $team7GoalsScored += $team7Score;
        $team7GoalsConceded += $team8Score;
        $team7MatchesPlayed++;
        $team7MatchesTied++;
        $team8MatchesLost++;
        
    } else {
        $team7Points += 1;
        $team8Points += 1;
        $team7GoalsScored += $team7Score;
        $team7GoalsConceded += $team8Score;
        $team8MatchesPlayed++;
        $team7MatchesTied++;
        $team8MatchesLost++;
    }
    
    //  CRIOCIA AND BELGIQUA
    if ($team9Score > $team10Score) {
        $team9Points += 3;
        $team9GoalsScored += $team9Score;
        $team9GoalsConceded += $team10Score;
        $team9MatchesPlayed++;
        $team9MatchesWon++;
        $team10MatchesPlayed++;
        $team10MatchesLost++;
        
    } else if ($team9Score < $team10Score) {
        $team10Points += 3;
        $team9GoalsScored += $team9Score;
        $team9GoalsConceded += $team10Score;
        $team9MatchesPlayed++;
        $team9MatchesTied++;
        $team10MatchesLost++;
        
    } else {
        $team9Points += 1;
        $team10Points += 1;
        $team9GoalsScored += $team9Score;
        $team9GoalsConceded += $team10Score;
        $team9MatchesPlayed++;
        $team9MatchesTied++;
        $team10MatchesPlayed++;
        $team10MatchesTied++;
        $team10MatchesLost++;
    }
    
    //  MAROCA AND CANADA
    if ($team11Score > $team12Score) {
        $team11Points += 3;
        $team11GoalsScored += $team11Score;
        $team11GoalsConceded += $team12Score;
        $team11MatchesPlayed++;
        $team11MatchesWon++;
        $team12MatchesPlayed++;
        $team12MatchesLost++;
        
    } else if ($team11Score < $team12Score) {
        $team11Points += 3;
        $team11GoalsScored += $team11Score;
        $team11GoalsConceded += $team12Score;
        $team11MatchesPlayed++;
        $team11MatchesTied++;
        $team12MatchesPlayed++;
        $team12MatchesTied++;
        $team12MatchesLost++;
        
    } else {
        $team11Points += 1;
        $team11GoalsScored += $team11Score;
        $team11GoalsConceded += $team12Score;
        $team11MatchesPlayed++;
        $team11MatchesTied++;
        $team12MatchesPlayed++;
        $team12MatchesTied++;
        $team12MatchesLost++;
    } 
    // trier les équipes par points, différence de buts, buts marqués (sort)
    $teams = array(
            array("MAROC", $team1Points, $team1GoalsScored - $team1GoalsConceded, $team1GoalsScored,  $team1MatchesPlayed, $team1MatchesWon, $team1MatchesTied, $team1MatchesLost, $team1GoalsScored,  $team1GoalsConceded , $team5Points, $team5GoalsScored - $team5GoalsConceded, $team5GoalsScored,  $team5MatchesPlayed, $team5MatchesWon, $team5MatchesTied, $team5MatchesLost, $team5GoalsScored,  $team5GoalsConceded, $team11Points, $team11GoalsScored - $team11GoalsConceded, $team11GoalsScored,  $team11MatchesPlayed, $team11MatchesWon, $team11MatchesTied, $team11MatchesLost, $team11GoalsScored,   $team11GoalsConceded ),
            array("CROICIA", $team2Points, $team2GoalsScored - $team2GoalsConceded, $team2GoalsScored,  $team2MatchesPlayed, $team2MatchesWon, $team2MatchesTied, $team2MatchesLost, $team2GoalsScored,  $team2GoalsConceded,$team1Points, $team1GoalsScored - $team1GoalsConceded, $team1GoalsScored,  $team1MatchesPlayed, $team1MatchesWon, $team1MatchesTied, $team1MatchesLost, $team1GoalsScored,  $team1GoalsConceded , $team8Points, $team8GoalsScored - $team8GoalsConceded, $team8GoalsScored,  $team8MatchesPlayed, $team8MatchesWon, $team8MatchesTied ,$team8MatchesLost, $team8GoalsScored,  $team8GoalsConceded, $team10Points, $team10GoalsScored - $team10GoalsConceded, $team10GoalsScored,  $team10MatchesPlayed, $team10MatchesWon, $team10MatchesTied, $team10MatchesLost, $team10GoalsScored,   $team10GoalsConceded),
            array("BELGIQUE", $team3Points, $team3GoalsScored - $team3GoalsConceded, $team3GoalsScored,  $team3MatchesPlayed, $team3MatchesWon, $team3MatchesTied, $team3MatchesLost, $team3GoalsScored,  $team3GoalsConceded , $team4Points, $team4GoalsScored - $team4GoalsConceded, $team4GoalsScored,  $team4MatchesPlayed, $team4MatchesWon, $team4MatchesTied, $team4MatchesLost, $team4GoalsScored,  $team4GoalsConceded , $team6Points, $team6GoalsScored - $team6GoalsConceded, $team6GoalsScored,  $team6MatchesPlayed, $team6MatchesWon, $team6MatchesTied, $team6MatchesLost, $team6GoalsScored,  $team6GoalsConceded , $team9Points, $team9GoalsScored - $team9GoalsConceded, $team9GoalsScored,  $team9MatchesPlayed, $team9MatchesWon, $team9MatchesTied, $team9MatchesLost, $team9GoalsScored,  $team9GoalsConceded),
            array("CANADA", $team4Points, $team4GoalsScored - $team4GoalsConceded, $team4GoalsScored,  $team4MatchesPlayed, $team4MatchesWon, $team4MatchesTied, $team4MatchesLost, $team4GoalsScored,  $team4GoalsConceded , $team5Points, $team5GoalsScored - $team5GoalsConceded, $team5GoalsScored,  $team5MatchesPlayed, $team5MatchesWon, $team5MatchesTied, $team5MatchesLost, $team5GoalsScored,  $team5GoalsConceded , $team7Points, $team7GoalsScored - $team7GoalsConceded, $team7GoalsScored,  $team7MatchesPlayed, $team7MatchesWon, $team7MatchesTied, $team7MatchesLost, $team7GoalsScored,  $team7GoalsConceded ,  $team12Points, $team12GoalsScored - $team12GoalsConceded, $team12GoalsScored,  $team12MatchesPlayed, $team12MatchesWon, $team12MatchesTied, $team12MatchesLost, $team12GoalsScored,   $team12GoalsConceded),
            // array("BELGIQUE", $team5Points, $team5GoalsScored - $team5GoalsConceded, $team5GoalsScored,  $team5MatchesPlayed, $team5MatchesWon, $team5MatchesTied, $team5MatchesLost, $team5GoalsScored,  $team5GoalsConceded),
            // array("MAROC", $team6Points, $team6GoalsScored - $team6GoalsConceded, $team6GoalsScored,  $team6MatchesPlayed, $team6MatchesWon, $team6MatchesTied, $team6MatchesLost, $team6GoalsScored,  $team6GoalsConceded),
            // array("CROICIA", $team7Points, $team7GoalsScored - $team7GoalsConceded, $team7GoalsScored,  $team7MatchesPlayed, $team7MatchesWon, $team7MatchesTied, $team7MatchesLost, $team7GoalsScored,  $team7GoalsConceded),
            // array("CANADA", $team8Points, $team8GoalsScored - $team8GoalsConceded, $team8GoalsScored,  $team8MatchesPlayed, $team8MatchesWon, $team8MatchesTied ,$team8MatchesLost, $team8GoalsScored,  $team8GoalsConceded),
            // array("CROICIA", $team9Points, $team9GoalsScored - $team9GoalsConceded, $team9GoalsScored,  $team9MatchesPlayed, $team9MatchesWon, $team9MatchesTied, $team9MatchesLost, $team9GoalsScored,  $team9GoalsConceded),
            // array("BELGIQUE", $team10Points, $team10GoalsScored - $team10GoalsConceded, $team10GoalsScored,  $team10MatchesPlayed, $team10MatchesWon, $team10MatchesTied, $team10MatchesLost, $team10GoalsScored,   $team10GoalsConceded),
            // array("CANADA", $team11Points, $team11GoalsScored - $team11GoalsConceded, $team11GoalsScored,  $team11MatchesPlayed, $team11MatchesWon, $team11MatchesTied, $team11MatchesLost, $team11GoalsScored,   $team11GoalsConceded),
            // array("MAROC", $team12Points, $team12GoalsScored - $team12GoalsConceded, $team12GoalsScored,  $team12MatchesPlayed, $team12MatchesWon, $team12MatchesTied, $team12MatchesLost, $team12GoalsScored,   $team12GoalsConceded),
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
    
    // afficher le tableau des résultats
    echo "<table>";
    echo "<tr><th>Team</th><th>Points</th><th>+/-</th><th>Buts marqués</th><th>Matchs joués</th><th>Matchs gagnés</th><th>Matches à égalité</th><th>Matchs perdus</th><th>Objectifs confirmés</th></tr>";
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
        echo "<td>" . $team[9] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    // SYYYYYYLE
    echo "
    <style>
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
    </style>
    ";

?>
