var searchInput = document.getElementById('search-input');
var searchButton = document.getElementById('search-button');

searchButton.addEventListener('click', function() {
  var searchTerm = searchInput.value;
  window.location.href = `${searchTerm}.html`;
});
