
// Insert angka ke textview
function insert(num){
	document.form.textarea.value = document.form.textarea.value + num;
}

// Fungsi Hitung
function equal(){
    var hasil = document.form.textarea.value;
    try {
        // Gunakan eval untuk menghitung, tetapi pastikan hanya format yang aman yang dieksekusi
        document.form.textarea.value = eval(hasil);
    } catch (e) {
        document.form.textarea.value = "Error";
    }
}

// delete kabeh
function clean(){
	document.form.textarea.value ="";
}

// Delete siji tok
function back(){
	var hasil = document.form.textarea.value;
	document.form.textarea.value = hasil.substring(0,hasil.length-1);
}
