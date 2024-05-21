const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('click', function () {
    const videoId = this.getAttribute('data-video-id');
    const videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    document.getElementById('videoPlayer').src = videoUrl;

    const cardTitle = this.querySelector('.card-title').textContent;
    document.getElementById('videoModalLabel').textContent = cardTitle;

    const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
    videoModal.show();
  });
});

document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
  document.getElementById('videoPlayer').src = '';
});


