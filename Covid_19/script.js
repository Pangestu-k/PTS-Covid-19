// ini adalah bagian javascript
function test()
{
    let cek = document.getElementsByName('ya'); 
    let hasil = 0;
    for ( a = 0; a < cek.length; a++){
        if(cek[a].checked){
            hasil += parseFloat(cek[a].value);
        }
    }
    let total = document.getElementById('total');
    let keputusan = document.getElementById('keputusan');
    total.value = hasil.toFixed(0); 
    if(total.value == 0){
        keputusan.value = "Isi dulu Form nya Brother";
        total.value = "";
    }else if(total.value < 7){
        keputusan.value = "Resiko Rendah";
    }else if(total.value < 14){
        keputusan.value = "Resiko Sedang";
    }else if (total.value <= 21) {
        keputusan.value = "Resiko Tinggi";
    }else{
        alert('Jawaban Tidak Benar!');
    }
}