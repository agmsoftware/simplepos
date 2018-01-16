<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>agmsoftware.id</title>

        <!-- Include multi.js -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/multi.min.css');?>">
        <script src="<?php echo base_url('dist/multi.min.js');?>"></script>

        <style>
            /* Basic styling */
            body {
                font-family: sans-serif;
            }

            .container {
                box-sizing: border-box;;
                margin: 0 auto;
                max-width: 500px;
                padding: 0 20px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            
                
               <?php
               if(isset($list)) {

                 echo "<h1>Codeigniter Cafe</h1><Br>
                 <table>";   


                    foreach ($list->result() as $r) {   
                                    echo "<tr>
                                            <td>$r->nama_item</td>
                                            <td>&nbsp;&nbsp;&nbsp;&nbsp;$r->harga</td>
                                            </tr>";
                    }
                
                echo "</table><br><br>";

                }
                else {
                   echo "<h1>Simple POS</h1><Br>";    
                }
                ?> 
                
                <!-- reset -->
                <a href="<?php echo base_url('index.php/welcome/customer_baru'); ?>">Customer Baru</a><br><br>  


                <?php
                echo form_open('welcome/simpan');
                ?>

            <select multiple="multiple" name="warung[]" id="buah_select">
                <option value="kopi">Kopi Rp. 2.000,-</option>
                <option value="buryam">Bubur Ayam Rp. 5.000,-</option>
                <option value="sate">Sate Telur Rp. 2.000,-</option>
                <option value="intel">Intel Rp. 3.000,-</option>
            </select>
            <br>
            <input type=submit value="Cetak Struk">
            
        </form>
        </div>

        <br><bR>


        <script>
            var select = document.getElementById('buah_select');
            multi( select );
        </script>




    </body>
</html>
