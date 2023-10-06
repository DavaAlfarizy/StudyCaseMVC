<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>


<script>
    // Mengambil elemen input search
    var searchInput = document.getElementById('search');

    // Menambahkan event listener untuk event input
    searchInput.addEventListener('input', function() {
        var filter, table, tr, td, i, j, txtValue;
        filter = searchInput.value.toUpperCase();
        table = document.querySelector('.table');
        tr = table.getElementsByTagName('tr');

        // Loop melalui semua baris tabel, sembunyikan yang tidak sesuai dengan kueri pencarian
        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = 'none'; // Sembunyikan baris awalnya
            td = tr[i].getElementsByTagName('td');
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = ''; // Tampilkan baris jika kueri cocok dengan salah satu kolom
                        break; // Keluar dari loop kolom jika ada kecocokan
                    }
                }
            }
        }
    });
</script>

</html>