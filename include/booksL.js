const categoryDropdown = document.getElementById('categoryDropdown');
  const bookList = document.getElementById('dataServices');


  categoryDropdown.addEventListener('change', function() 
  {
      const selectedCategory = categoryDropdown.value;
      console.log(selectedCategory);
      filterBooks(selectedCategory);
  });


  function filterBooks(category) {

      const books = document.getElementsByClassName('book');

      for (let i = 0; i < books.length; i++) {
        console.log(books.length);
          const book = books[i];
          console.log(book.dataset.category);
          const bookCategory = book.dataset.category;
          console.log(bookCategory);
          if (category === '' || bookCategory === category) {
              book.style.display = 'block';
          } else {
              book.style.display = 'none';
          }
      }
  }