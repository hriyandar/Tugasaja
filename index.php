<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    
   
</head>
<body>
   
                        <h2 class="pull-left">Data Pelanggan</h2>
                        <a href="create.php" class="btn btn-success pull-right">Tambah Baru</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM pelanggan";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID Pelangggan</th>";
                                        echo "<th>Nama</th>";
                                        echo "<th>Tanggal lahir</th>";
                                        echo "<th>Alamat</th>";
                                        echo "<th>Telepon</th>";
                                        echo "<th colspan='2'>Pengaturan</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nama'] . "</td>";
                                        echo "<td>" . $row['tgl_lahir'] . "</td>";
                                        echo "<td>" . $row['alamat'] . "</td>";
                                        echo "<td>" . $row['telp'] . "</td>";
                                        echo "<td>";
                                            
                                            echo "<a href='edit.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'>edit</span></a></td>";
                                            echo "<td><a href='hapus.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>hapus<span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
               
</body>
</html>