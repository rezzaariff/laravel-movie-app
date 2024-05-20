function authenticate() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === 'your-name' && password === 'student-nf23') {
        alert('Login Berhasil');
        window.location.href = 'success.html';
    } else {
        alert('Login gagal. Coba cek kembali username dan password anda.');
    }

}
