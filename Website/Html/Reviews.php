<?php include '../../Includes/Header.php'; ?>

<section class="reviews" id="reviews">
  <h2>Guest Reviews</h2>

  <!-- Review 1 -->
  <div class="review-item">
    <div class="review-header">
      <img src="../Assets/test.jpg" alt="Reviewer" class="review-avatar">
      <div>
        <h4>Maartje</h4>
        <p class="review-sub">13 years on Airbnb</p>
      </div>
    </div>
    <div class="review-body">
      <p class="review-stars">★★★★★</p>
      <p class="review-date">June 2025 · Stayed a few nights</p>
      <p class="review-text">
     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod deserunt eligendi veritatis sapiente debitis, 
     laborum consectetur ea praesentium in asperiores neque quo alias tenetur excepturi voluptatem reiciendis, 
     minima provident! Eligendi.
      </p>
      <a href="#" class="show-more">Show more</a>
    </div>
  </div>

  <!-- Review 2 -->
  <div class="review-item">
    <div class="review-header">
      <img src="../Assets/test.jpg" alt="Reviewer" class="review-avatar">
      <div>
        <h4>Pedro</h4>
        <p class="review-sub">9 years on Airbnb</p>
      </div>
    </div>
    <div class="review-body">
      <p class="review-stars">★★★★★</p>
      <p class="review-date">2 weeks ago · Stayed a few nights</p>
      <p class="review-text">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Provident, asperiores ipsa nulla ab sapiente sit quo. 
       Omnis quasi cumque voluptatibus, ab totam eius rem ipsa laborum dolorem corporis vero illo.
      </p>
      <a href="#" class="show-more">Show more</a>
    </div>
  </div>

  <!-- Review 3 -->
  <div class="review-item">
    <div class="review-header">
      <img src="../Assets/test.jpg" alt="Reviewer" class="review-avatar">
      <div>
        <h4>Christian</h4>
        <p class="review-sub">11 years on Airbnb</p>
      </div>
    </div>
    <div class="review-body">
      <p class="review-stars">★★★★★</p>
      <p class="review-date">June 2025 · Stayed a week</p>
      <p class="review-text">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Laborum, blanditiis assumenda! Praesentium amet ut odio numquam provident officia, 
      alias magni earum ex quis! Amet soluta assumenda quo, aperiam repellat iure.
      </p>
      <a href="#" class="show-more">Show more</a>
    </div>
  </div>

  <!-- Review 4 -->
  <div class="review-item">
    <div class="review-header">
      <img src="../Assets/test.jpg" alt="Reviewer" class="review-avatar">
      <div>
        <h4>Babet</h4>
        <p class="review-sub">9 years on Airbnb</p>
      </div>
    </div>
    <div class="review-body">
      <p class="review-stars">★★★★★</p>
      <p class="review-date">November 2024 · Stayed a few nights</p>
      <p class="review-text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Beatae obcaecati voluptates, natus possimus autem quam aut blanditiis velit asperiores aperiam eius. 
        Fuga nostrum veritatis inventore nihil molestias harum maxime magni!
      </p>
      <a href="#" class="show-more">Show more</a>
    </div>
  </div>

  <!-- Review 5 -->
  <div class="review-item">
    <div class="review-header">
      <img src="../Assets/test.jpg" alt="Reviewer" class="review-avatar">
      <div>
        <h4>Laura</h4>
        <p class="review-sub">Zürich, Switzerland</p>
      </div>
    </div>
    <div class="review-body">
      <p class="review-stars">★★★★★</p>
      <p class="review-date">May 2025 · Stayed with kids</p>
      <p class="review-text">
       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Tempora, id illo veritatis magni incidunt atque, qui tempore possimus sequi commodi amet maxime alias minima impedit 
       repellendus natus dicta, molestias mollitia?.
      </p>
      <a href="#" class="show-more">Show more</a>
    </div>
  </div>

</section>

<script>
  // Show more toggle
  document.querySelectorAll(".show-more").forEach(link => {
    link.addEventListener("click", function(e) {
      e.preventDefault();
      const text = this.previousElementSibling;
      if (text.style.maxHeight) {
        text.style.maxHeight = null;
        this.textContent = "Show more";
      } else {
        text.style.maxHeight = "none";
        this.textContent = "Show less";
      }
    });
  });
</script>

<?php include '../../Includes/Footer.php'; ?>
