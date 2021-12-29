// Siapin semua yang dibutuhin, karena nnti pake jquery ya pake aja sekalian
const toggleTheme = $('#toggleTheme');
const body = $('body');
const title = $('#title');
const content = $('#content');


// Fungsi yg ketrigger saat user mengklik nama kategori
const chooseCategory = async (category) => {
  // Ambil data dari json dan filter menurut kategori
  let datum = await filterData(category);

  // Kosongkan Content
  content.html('');

  // isi title sesuai kategori yang dipilih
  category ? title.text(category) : title.text('All');

  // Loop datum yang didapat
  if (datum.length > 0) {
    datum.forEach(data => {

      // Struktur card nya
      let card = `
      <div class="lg:w-1/4 md:w-1/3 sm:w-1/2 w-full p-3">
        <div class="card card-bordered shadow-2xl">
          <figure>
            <img src="${data.gambar || 'https://picsum.photos/id/1005/400/250'}" style="height:200px">
          </figure>
          <div class="card-body">
            <h2 class="card-title mb-3">${data.nama}</h2>
            <p class="text-base mb-3">${data.deskripsi}</p>
            <div class="flex justify-between">
              <p class="font-medium">Rp. ${data.harga}</p>
              <p class="">${data.estimasi}</p>
            </div>
            <div class="justify-center card-actions">
              <button class="btn btn-wide btn-warning">Pesan Sekarang</button>
            </div>
          </div>
        </div>
      </div>
      `;

      // Masukin card ke content
      content.append(card);
    })
  } else {
    // Kalo datumnya itu sama dengan atau kurang dari 0. tampilkan not found
    let notFound = `
    <div class="w-full flex-col content-center">
      <div>
        <p class="text-3xl font-semibold text-center mt-10 mb-3 flex-1">404 Not Found</p>
        <p class="text-lg font-medium text-center flex-1">Silahkan pilih kategori lain</p>
      </div>
    </div>
    `
    content.append(notFound);
  }
}

// Fungsi async buat ngambil data sekaligus filter
const filterData = async (category) => {
  // Baca file jsonnya
  let data = await $.getJSON('data.json')
  
  // Cek apakah categori itu ada atau nggak. kalau ada, filter menurut kategori tersebut. kalau tidak ada, kembalikan semua data.
  return category ? data['menu'].filter((current) => current.jenis === category) : data['menu']
}

// Ini buat ganti thema
const changeTheme = () => toggleTheme[0].checked ? body.attr('data-theme', 'dracula') : body.attr('data-theme', 'light')

// Ini buat nampilin pertama kali. 
chooseCategory();