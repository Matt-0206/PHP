<footer>

        <?php 
        
                $startYear = 2006;      
                $thisYear = date('Y');

                if ($startYear == $thisYear){   //controllo dell'anno, se l'anno attuale è uguale all'anno di inzio...

                        $output = $startYear; //crea una variabile con valore uguale a "$startYear"

                }else{

                        $output = "{$startYear}&ndash;{$thisYear}"; //crea una variabile con la data di inizio e quella attuale

                } 
        
                $currentPage = basename($_SERVER['SCRIPT_FILENAME']);

                if($currentPage == 'about.php'){

                        $privacyPolicy = '<a href="">PrivacyPolicy</a>';

                }else{



                }

        ?>

        <p>&copy; <?= $output ?> Matteo Alliu <?= $privacyPolicy ?></p> <!-- Si usa un "Short Echo Tag" al posto del tag PHP tradizionale , stampa in automatico senza l'uso di "echo" -->
 
        

</footer>