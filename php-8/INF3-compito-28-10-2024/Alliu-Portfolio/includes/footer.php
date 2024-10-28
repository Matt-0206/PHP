<footer>
        <?php
                $startYear = 2024;      
                $thisYear = date('Y');

                if ($startYear == $thisYear){

                        $output = $startYear;

                }else{

                        $output = "{$startYear}&ndash;{$thisYear}";

                }

        ?>
        <p>&copy; <?= $output ?> Matteo Alliu</p>

</footer>