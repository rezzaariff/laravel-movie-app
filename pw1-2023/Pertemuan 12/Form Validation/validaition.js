function validateForm() {
    // Reset error messages
    document.getElementById('errorMessages').innerHTML = '';

    // Get form values
    const name = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const departureTime = document.getElementById('keberangkatan').value;
    const numTickets = document.getElementById('jumlahTiket').value;

    // Validation
    let errorMessages = '';

    if (name.length > 30) {
      errorMessages += 'Nama maximal 30 characters.<br>';
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      errorMessages += 'Format email salah.<br>';
    }

    const timeRegex = /^([01]\d|2[0-3]):[0-5]\d$/;
    if (!timeRegex.test(departureTime)) {
      errorMessages += 'Format waktu salah (format waktu 24 jam contoh 20:00).<br>';
    }

    if (numTickets < 1 || numTickets > 10) {
      errorMessages += 'Jumlah pemesanan tiket hanya antara 1 sampai 10.<br>';
    }

    // Display error messages or form data
    if (errorMessages !== '') {
      document.getElementById('errorMessages').innerHTML = errorMessages;
    } else {
      const formDataDisplay = `Nama: ${name}<br>Email: ${email}<br>Waktu Keberangkatan: ${departureTime}<br>Jumlah Tiket: ${numTickets}`;
      document.getElementById('formData').innerHTML = formDataDisplay;
    }
  }
