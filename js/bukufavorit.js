document.querySelectorAll('.add-favorite').forEach(button => {
    button.addEventListener('click', function() {
        const bookCard = this.closest('.book-card');
        const title = bookCard.getAttribute('data-title');
        const author = bookCard.getAttribute('data-author');
        
        const isAlreadyFavorite = Array.from(favoriteBooks.children).some(
            (card) => card.querySelector("h3").innerText === title
        );
        if (isAlreadyFavorite) {
            alert("Buku ini sudah ada di daftar favorit!");
            return;
        }
        // Buat elemen untuk buku favorit
        const favoriteBook = document.createElement('div');
        favoriteBook.classList.add('book-card');
        favoriteBook.innerHTML = `
            <img src="${bookCard.querySelector('img').src}" alt="Cover ${title}">
            <div class="book-info">
                <h3>${title}</h3>
                <p>Oleh: ${author}</p>
            </div>
        `;
        
        // Tambahkan ke daftar buku favorit
        document.getElementById('favoriteBooks').appendChild(favoriteBook);
    });
});