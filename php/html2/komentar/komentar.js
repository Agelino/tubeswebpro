// Ambil elemen dari DOM
const commentInput = document.getElementById('commentInput');
const submitCommentButton = document.getElementById('submitComment');
const commentList = document.getElementById('commentList');

// Fungsi untuk menambahkan komentar
function addComment() {
    const commentText = commentInput.value.trim();

    if (commentText) {
        // Buat elemen list baru untuk komentar
        const commentItem = document.createElement('li');
        commentItem.className = 'comment-item';

        // Tambahkan isi komentar dan tombol hapus
        commentItem.innerHTML = `
            <div class="comment-author">User123</div>
            <div class="comment-text">${commentText}</div>
            <button class="delete-button">Hapus</button>
        `;

        // Tambahkan event listener untuk tombol hapus
        const deleteButton = commentItem.querySelector('.delete-button');
        deleteButton.addEventListener('click', () => {
            commentItem.remove(); // Menghapus komentar
        });

        // Tambahkan komentar ke dalam daftar
        commentList.appendChild(commentItem);

        // Kosongkan kolom input setelah komentar dikirim
        commentInput.value = '';
    }
}

// Tambahkan event listener untuk tombol kirim
submitCommentButton.addEventListener('click', addComment);
