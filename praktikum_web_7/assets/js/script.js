const select_provinsi = document.querySelector('#select_provinsi');
const select_kota = document.querySelector('#select_kota');
const toggle = document.querySelector('#toggle');
const result = document.querySelector('#result');
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
  let provinsi_value = select_provinsi.value;
  select_kota.removeAttribute('disabled');
  select_kota.innerHTML = data[provinsi_value];
  result.innerText = `Silahkan Pilih Kota`;
}

const func_select_kota = () => {
  let provinsi_value = select_provinsi.value;
  let kota_value = select_kota.value;
  result.innerText = `pada Provinsi ${provinsi_value} ada Kota ${kota_value}`;
}

const func_toggle = () => {
  let html = document.querySelector('html');
  let toggle_checked = toggle.checked;

  if(toggle_checked){
    html.setAttribute('data-theme','dark')
  }else{
    html.setAttribute('data-theme','light')
  }
  console.log(toggle_checked);
}

select_provinsi.addEventListener('change', func_select_provinsi);
select_kota.addEventListener('change', func_select_kota);
toggle.addEventListener('click', func_toggle)