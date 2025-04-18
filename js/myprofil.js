const profileImage = document.getElementById("profile-image");
const profileUpload = document.getElementById("profile-upload");
const coverImage = document.getElementById("cover-image");
const coverUpload = document.getElementById("cover-upload");
const saveButton = document.querySelector(".save-btn");

const usernameInput = document.querySelector('input[placeholder="Enter your username"]');
const socialMediaInput = document.querySelector('input[placeholder="Enter your social media"]');
const bioInput = document.querySelector('textarea[placeholder="Enter Your Bio"]');

const displayUsername = document.getElementById("display-username");
const displaySocialMedia = document.getElementById("display-social-media");
const displayBio = document.getElementById("display-bio");


profileImage.addEventListener("click", () => {
  profileUpload.click();
});


profileUpload.addEventListener("change", (e) => {
  const file = e.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = () => {
      profileImage.src = reader.result; 
    };
    reader.readAsDataURL(file); 
  }
});

coverImage.addEventListener("click", () => {
  coverUpload.click();
});


coverUpload.addEventListener("change", (e) => {
  const file = e.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = () => {
      coverImage.src = reader.result; 
    };
    reader.readAsDataURL(file); 
  }
});


saveButton.addEventListener("click", (e) => {
  e.preventDefault(); 

  
  const username = usernameInput.value.trim();
  const socialMedia = socialMediaInput.value.trim();
  const bio = bioInput.value.trim();


  if (username && socialMedia && bio) {

    displayUsername.textContent = username;
    displaySocialMedia.textContent = socialMedia;
    displayBio.textContent = bio;


    alert(`
        Data berhasil disimpan!
        Username: ${username}
        Social Media: ${socialMedia}
        Bio: ${bio}
      `);
  } else {
 
    alert("Harap isi semua kolom sebelum menyimpan.");
  }
});