<link rel="stylesheet" href="../../styles/bracket.css">
<?php

$id = $_GET['id'];

$requeteSQL = $bdd->prepare("SELECT * FROM inscriptions WHERE id_tournoi = '".$id."';");
$requeteSQL->execute();
$resultat = $requeteSQL->fetchAll(PDO::FETCH_ASSOC);

$joueurs = [];

foreach ($resultat as $joueur) {
    $joueurs[] = $joueur['id_joueur'];
}

$nb_joueurs = count($joueurs);
$nb_matchs = 32;
?>
    <div class="menu_tournoi">
        <div class="bouton_menu_tournoi">
            <a href="#" class="lien_menu_tournoi">BRACKET</a>       
        </div>
        <?php if ($role == 1) { ?>
            <div class="bouton_menu_tournoi">
                <a href="#" class="lien_menu_tournoi">DEMARRER LE TOURNOI</a>       
            </div>
        <?php } ?>

    </div>

        <div class="bracket"> 
            <!-- ROUND 1 -->
            <div class="round1">
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[0]) ? $joueurs[0] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[1]) ? $joueurs[1] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[2]) ? $joueurs[2] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[3]) ? $joueurs[3] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[4]) ? $joueurs[4] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[5]) ? $joueurs[5] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[6]) ? $joueurs[6] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[7]) ? $joueurs[7] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[8]) ? $joueurs[8] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[9]) ? $joueurs[9] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[10]) ? $joueurs[10] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[11]) ? $joueurs[11] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[12]) ? $joueurs[12] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[13]) ? $joueurs[13] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[14]) ? $joueurs[14] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[15]) ? $joueurs[15] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[16]) ? $joueurs[16] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[17]) ? $joueurs[17] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[18]) ? $joueurs[18] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[19]) ? $joueurs[19] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[20]) ? $joueurs[20] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[21]) ? $joueurs[21] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[22]) ? $joueurs[22] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[23]) ? $joueurs[23] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[24]) ? $joueurs[24] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[25]) ? $joueurs[25] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[26]) ? $joueurs[26] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[27]) ? $joueurs[27] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[28]) ? $joueurs[28] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[29]) ? $joueurs[29] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[30]) ? $joueurs[30] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[31]) ? $joueurs[31] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[32]) ? $joueurs[32] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[33]) ? $joueurs[33] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[34]) ? $joueurs[34] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[35]) ? $joueurs[35] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[36]) ? $joueurs[36] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[37]) ? $joueurs[37] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[38]) ? $joueurs[38] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[39]) ? $joueurs[39] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[40]) ? $joueurs[40] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[41]) ? $joueurs[41] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[42]) ? $joueurs[42] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[43]) ? $joueurs[43] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[44]) ? $joueurs[44] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[45]) ? $joueurs[45] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[46]) ? $joueurs[46] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[47]) ? $joueurs[47] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[48]) ? $joueurs[48] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[49]) ? $joueurs[49] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[50]) ? $joueurs[50] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[51]) ? $joueurs[51] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[52]) ? $joueurs[52] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[53]) ? $joueurs[53] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[54]) ? $joueurs[54] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[55]) ? $joueurs[55] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[56]) ? $joueurs[56] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[57]) ? $joueurs[57] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[58]) ? $joueurs[58] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[59]) ? $joueurs[59] : "FREEWIN"; ?>
                    </div>
                </div>
                <div class="match">
                    <div class="player1">
                        <?php echo isset($joueurs[60]) ? $joueurs[60] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[61]) ? $joueurs[61] : "FREEWIN"; ?>
                    </div>
                </div>

                <div class="match2">
                    <div class="player1">
                        <?php echo isset($joueurs[62]) ? $joueurs[62] : "FREEWIN"; ?>
                    </div>
                    <div class="player2">
                        <?php echo isset($joueurs[63]) ? $joueurs[63] : "FREEWIN"; ?>
                    </div>
                </div>

            </div>
            <!-- ROUND 2 -->
            <div class="round">
                <div class="match">
                <div class="player1">Joueur 1</div>
                <div class="player2">Joueur 3</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 5</div>
                <div class="player2">Joueur 7</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 9</div>
                <div class="player2">Joueur 11</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 13</div>
                <div class="player2">Joueur 15</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 17</div>
                <div class="player2">Joueur 19</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 21</div>
                <div class="player2">Joueur 23</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 25</div>
                <div class="player2">Joueur 27</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 29</div>
                <div class="player2">Joueur 31</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 33</div>
                <div class="player2">Joueur 35</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 37</div>
                <div class="player2">Joueur 39</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 41</div>
                <div class="player2">Joueur 43</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 45</div>
                <div class="player2">Joueur 47</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 49</div>
                <div class="player2">Joueur 51</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 53</div>
                <div class="player2">Joueur 55</div>
                </div>
                <div class="match">
                <div class="player1">Joueur 57</div>
                <div class="player2">Joueur 59</div>
                </div>
                <div class="match2">
                <div class="player1">Joueur 61</div>
                <div class="player2">Joueur 63</div>
                </div>

            </div>
    </div>
        
        <?php


?>