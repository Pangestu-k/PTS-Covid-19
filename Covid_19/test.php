   <form action="hasil.php" method="POST">
    <!-- ini kontainer form -->
            <div class="container-form">
                
                <div class="atas">
                    <label for="">Nama : </label><br>
                    <input type="text" name="nama" placeholder="   Ketikan Nama anda" autofocus="on" required>
                    <br><br>
                    <label for="">Umur : </label><br>
                    <input type="number" name="umur" placeholder="   Masukan umur anda" required>
                </div>
                

                <!-- ini bagina pertama -->
                <div class="kiri-form">
                   <table cellspacing="0" cellpading="5">
                        <tr>
                            <td>Saya pergi keluar rumah</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check1"></td>
                        </tr>

                        <tr>
                            <td>Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check2"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak memakai masker pada saat berkumpul dengan orang lain.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check3"></td>
                        </tr>

                        <tr>
                            <td>Saya berjabat tangan dengan orang lain</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check4"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check5"></td>
                        </tr>

                        <tr>
                            <td>Saya menyentuh benda / uang yang juga disentuh orang lain.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check6"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check7"></td>
                        </tr>
                                        
                    </table>

                </div>
                
                <!-- ini bagian tengah form -->
                <div class="tengah-form">
                    <table cellspacing="0" cellpading="5">

                        <tr>
                            <td>Saya makan diluar rumah (warung / restaurant)</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check8"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check9"></td>
                        </tr>

                        <tr>
                            <td>Saya berada di wilayah kelurahan tempat pasien tertular</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check10"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang(handle) pintu masuk rumah.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check11"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check12"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak meyediakan : tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga dirumah.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check13"></td>
                        </tr>

                        <tr>
                            <td>Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas/sabun.</td>
                            <td align="center"><input type="checkbox" name="ya" value="1" id="check14"></td>
                        </tr>

                    </table>

                </div>
                
                <!-- ini bagina kanan form -->
                <div class="kanan-form">

                    <table cellspacing="0" cellpading="5">

                     <tr>
                        <td>Saya tidak segera mandi keramas setelah saya tiba di rumah.</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check15"></td>
                    </tr>

                    <tr>
                        <td>Saya tidak mesosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check16"></td>
                    </tr>

                    <tr>
                        <td>Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check17"></td>
                    </tr>

                    <tr>
                        <td>Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check18"></td>
                    </tr>

                    <tr>
                        <td>Saya jarang minum vitamin C & E, dan kurang tidur</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check19"></td>
                    </tr>

                    <tr>
                        <td>Usia saya diatas 60 tahun</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check20"></td>
                    </tr>

                    <tr>
                        <td>Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</td>
                        <td align="center"><input type="checkbox" name="ya" value="1" id="check21"></td>
                    </tr>

                    </table>

                </div>

            </div>

        <input type="hidden" id="keputusan" name="keputusan">
        <input type="hidden" id="total"name="total">
        <input type="submit" value="Cek hasil" onclick="test()" class="button-hasil" style="color: white;">
        </form>
    <br>

    <script src="script.js"></script>