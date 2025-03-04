function minifyListItems() {
  const listItems = document.querySelectorAll('li');
  listItems.forEach(item => {
    item.textContent = item.textContent.trim().replace(/\s+/g, ' ');
  });
}

minifyListItems(); // Call the function to minify the list items