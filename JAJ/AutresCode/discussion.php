<html><head>
<title>Projet web</title>
<link rel="StyleSheet" href="global.css">
</head>
<body>
<center>
<article>
<form action="GestionClassement.php" method="Post">
<h2>Les Matches du 1er Tour (GROUPE A)</h2><hr><br>
<table border="3">
<thead>
<tr >
<th>
Groupe A
 </th>
<th >
<Strong>Affichage</Strong>
</th>
<th>
<Strong>Score</Strong>
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
Match 1
</td>
<td>
  <?php
  echo $aff1; 
  echo' VS ';
  echo $aff2;
  
?>
</td>
<td>
<input type="number" name="score1" min="0" max="10" placeholder="Score1" required>
  -
<input type="number" name="score11" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 2
</td>
<td>
  <?php
echo $aff3;  
echo ' VS ';
echo $aff4;
?>
</td>
<td>
<input type="number" name="score2" min="0" max="10" placeholder="Score1" required>
  -  
<input type="number" name="score22" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 3
</td>
<td>
  <?php
  echo $aff1;
  echo' vs ';
echo $aff3;
?>
</td>
<td>
<input type="number" name="score3" min="0" max="10" placeholder="Score1" required>
 -  
<input type="number" name="score33" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 4
</td>
<td>
  <?php
echo $aff2;
echo' vs ';
echo $aff4;
?>
</td>
<td>
<input type="number" name="score4" min="0" max="10" placeholder="Score1" required>
 -  
<input type="number" name="score44" min="0" max="10" placeholder="Score2" required>
</td>
</tr>

<tr>
<td>
Match 5
</td>
<td>
  <?php
echo $aff1;
echo' vs ';
echo $aff4;
?>
</td>
<td>
<input type="number" name="score5" min="0" max="10" placeholder="Score1" required>
  -   
<input type="number" name="score55"  min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 6
</td>
<td>
  <?php
echo $aff2;
echo' vs ';
echo $aff3;
?>
</td>
<td>
<input type="number" name="score6" min="0" max="10" placeholder="Score1" required>
  -   
<input type="number" name="score66" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
</tbody>
</table>
<br/>
<br/>

<h2>Les Matches du 1er Tour (GROUPE B)</h2><hr><br>
<table>
<thead>
<tr>
<th>
Groupe B
 </th>
<th>
<Strong>Affichage</Strong>
</th>
<th>
<Strong>Score</Strong>
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
Match 7
</td>
<td>
  <?php
  echo $aff11;
echo' vs ';
echo $aff22;
?>
</td>
<td>
<input type="number" name="scorea1" min="0" max="10" placeholder="Score1" required>
  -
<input type="number" name="scorea2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 8
</td>
<td>
  <?php
echo $aff33;
echo' vs ';
echo $aff44;
?>
</td>
<td>
<input type="number" name="scoreb1" min="0" max="10" placeholder="Score1" required>
  -  
<input type="number" name="scoreb2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 9
</td>
<td>
  <?php
echo $aff11;
echo' vs ';
echo $aff33;
?>
</td>
<td>
<input type="number" name="scorec1" min="0" max="10" placeholder="Score1" required>
 -  
<input type="number" name="scorec2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 10
</td>
<td>
  <?php
echo $aff22;
echo' vs ';
echo $aff44;
?>
</td>
<td>
<input type="number" name="scored1" min="0" max="10" placeholder="Score1" required>
 -  
<input type="number" name="scored2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>

<tr>
<td>
Match 11
</td>
<td>
  <?php
echo $aff11;
echo' vs ';
echo $aff44;
?>
</td>
<td>
<input type="number" name="scoree1" min="0" max="10" placeholder="Score1" required>
  -   
<input type="number" name="scoree2"  min="0" max="10" placeholder="Score2" required>
</td>
</tr>
<tr>
<td>
Match 12
</td>
<td>
  <?php
echo $aff22;
echo' vs ';
echo $aff33;
?>
</td>
<td>
<input type="number" name="scoref1" min="0" max="10" placeholder="Score1" required>
  -   
<input type="number" name="scoref2" min="0" max="10" placeholder="Score2" required>
</td>
</tr>
</tbody>
</table>
<br/><br/>
<div class="lance">
<button type="submit" name="Valider" value="Valider">Valider</button>
</div>
</form>
</body>