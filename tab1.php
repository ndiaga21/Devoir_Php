<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="style2.css"/>
	<title>ndiaga</title>
</head>
<body>
	<?php $personne = array('Prenom' => 'ndiaga' ,
                              '  Nom' => 'dieng' ,
                                 'Tel' => '775586481', 
                                 'Profession' => 'etudiant',
                                 'Niveau' => 'Bac +2',
                                 'Université' => 'UCAD',
                                 'Fac' => 'FST : TDSI : math-crypto',
                                 'Date de naissance' => '27-10-1997',
                                 'Identifiant Slack ' => 'Ndiagadieng.Slack.com',

                                 ); ?>
     <table>
          <tr>
              <td colspan="2"><img src="ndiaga.jpg" height="299" width="500"></td>
          </tr>
     
          <?php
          foreach ($personne as $key => $value) {
            if ($key != 'Tel') {

        echo " <tr>
                      <td class=\"key\">". $key."<span>:</span>
                      <td class=\"valeur\">". $value." </td>
                      </tr>"
                      ;
               
            }
            elseif ($key = 'Tel') {
              echo " <tr>
                      <td class=\"key\" > Telephone <span>:</span></td>
                      <td class=\"valeur\">". $value ."</td>
                      </tr>"
                      ;
            }
           
          	
          }
          ?>
     
     	
     </table>
</body>
</html>