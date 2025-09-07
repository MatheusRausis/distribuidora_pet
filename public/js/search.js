const search = document.getElementById('searchForm');
search.addEventListener('submit', async (e) => {
    e.preventDefault();
    const query = document.getElementById('query').value;
    console.log(query)
    window.location.href = `index.php?page=catalog&search=${query}`;
});