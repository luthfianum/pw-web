function calculate() {
  const invoice_table = document.querySelector('#invoice_table');
  const receipt_card = document.querySelector('#receipt_card');
  const view_table = document.querySelector('#view_table')
  const data = {
    nama_pelanggan: document.getElementById("nama_pelanggan").value,
    kategori: document.getElementById("kategori").value,
    jmlh_pemakaian: document.getElementById("jmlh_pemakaian").value,
    validate: () => {
      if (data.nama_pelanggan === '') {
        window.alert("Isi Nama Pelanggan");
        return false;
      } else if (data.jmlh_pemakaian == '') {
        window.alert("Isi Jumlah Pemakaian");
        return false;
      }
      return true
    }
  }
  const convert_kategori = {
    "Sosial" : {
      "abodemen" : 10000,
      "tarif" : 300,
      "pajak" : 0
    },
    "Rumah" : {
      "abodemen" : 30000,
      "tarif" : 500,
      "pajak" : 0.10
    },
    "Apartement" : {
      "abodemen" : 50000,
      "tarif" : 750,
      "pajak" : 0.15
    },
    "Industri" : {
      "abodemen" : 75000,
      "tarif" : 1000,
      "pajak" : 0.20
    },
    "Villa" : {
      "abodemen" : 100000,
      "tarif" : 1250,
      "pajak" : 0.25
    },
  }
  if (data.validate) {
    invoice_table.innerHTML = '';
    receipt_card.innerHTML = '';
    for(let i = 1; i <= data.jmlh_pemakaian; i++) {
      invoice_table.innerHTML += tableDataMaker(i, convert_kategori[data.kategori]);
    }
    receipt_card.innerHTML = receiptMaker(data, convert_kategori[data.kategori])
    view_table.scrollIntoView({behavior: "smooth"});
  }
}

function tableDataMaker(jumlah, data) {
  let result = `
              <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex">
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap">
                        ${jumlah}
                      </p>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">${data.tarif * jumlah}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">${data.abodemen}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">${data.abodemen + (data.tarif * jumlah)}</p>
                </td>
              </tr>
              `
  return result
}

function receiptMaker(data, kategori) {
  let subTotal = kategori.abodemen + data.jmlh_pemakaian*kategori.tarif;
  let pajak = subTotal*kategori.pajak;
  let total = subTotal + pajak;
  let result = `
    <div class="w-full  bg-white w-full rounded-lg shadow-xl">
      <div class="p-4 border-b">
        <h2 class="text-2xl ">
          Total
        </h2>
      </div>
      <div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
          <p class="text-gray-600">
            Nama
          </p>
          <p>
            ${data.nama_pelanggan}
          </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
          <p class="text-gray-600">
            Kategori
          </p>
          <p>
            ${data.kategori}
          </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
          <p class="text-gray-600">
            Jumlah Pemakaian
          </p>
          <p>
            ${data.jmlh_pemakaian}
          </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
          <p class="text-gray-600">
            Sub-total
          </p>
          <p>
            ${subTotal}
          </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
          <p class="text-gray-600">
            Pajak
          </p>
          <p>
            ${pajak}
          </p>
        </div>
        <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
          <p class="text-gray-600">
            Total
          </p>
          <p>
            ${total}
          </p>
        </div>
      </div>
    </div>
    `
  return result
}
