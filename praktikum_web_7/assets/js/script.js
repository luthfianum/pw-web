// Siapkan element-element yang akan digunakan
const select_provinsi = document.querySelector('#select_provinsi');
const select_kota = document.querySelector('#select_kota');
const toggle = document.querySelector('#toggle');
const result = document.querySelector('#result');
const html = document.querySelector('html');

// Siapkan Data Kota. biar enak berupa html aja jadi tinggal inner html
const data = {
  'Kalimantan Timur' : `
    <option disabled="disabled" selected="selected">Kota</option>
    <option>Samarinda</option>
    <option>Balikpapan</option>
    <option>Tenggarong</option>
    <option>Bontang</option>
    <option>Sangatta</option>
  `,
  'Kalimantan Selatan' : `
    <option disabled="disabled" selected="selected">Kota</option>
    <option>Banjarmasin</option>
    <option>Banjarbaru</option>
    <option>Martapura</option>
    <option>Barabai</option>
    <option>Amuntai</option>
  `,
  'Kalimantan Barat' : `
    <option disabled="disabled" selected="selected">Kota</option>
    <option>Singkawang</option>
    <option>Pontianak</option>
    <option>Ketapang</option>
    <option>Ngabang</option>
    <option>Sekadau</option>
  `,
  'Kalimantan Utara' : `
    <option disabled="disabled" selected="selected">Kota</option>
    <option>Malinau</option>
    <option>Tarakan</option>
    <option>Tana Tidung</option>
    <option>Nunukan</option>
    <option>Tanjung Selor</option>
  `,
  
}

const func_select_provinsi = () => {
  // Ambil Nilai provinsi
  let provinsi_value = select_provinsi.value;

  // Enable Input Kota 
  select_kota.removeAttribute('disabled');

  // Masukkan html di data kedalam input kota
  select_kota.innerHTML = data[provinsi_value];

  // Ganti Tulisan Menjadi Input Kota
  result.innerText = `Silahkan Pilih Kota`;
}

const func_select_kota = () => {
  // Ambil value provinsi dan kota
  let provinsi_value = select_provinsi.value;
  let kota_value = select_kota.value;

  // Tampilkan pada result
  result.innerText = `pada Provinsi ${provinsi_value} ada Kota ${kota_value}`;
}

const func_toggle = () => {
  // Ambil Nilai Apakah Toggle True(checked) atau False(unchecked)
  let toggle_checked = toggle.checked;

  // Jika Value toggle true, ubah jadi dark mode. jika false ubah jadi light mode.
  toggle_checked ? html.setAttribute('data-theme','dark') : html.setAttribute('data-theme','light')
}

// Ini daftar event listener-nya
select_provinsi.addEventListener('change', func_select_provinsi);
select_kota.addEventListener('change', func_select_kota);
toggle.addEventListener('click', func_toggle)