
  const container = document.getElementById("comments-container");
  const searchInput = document.getElementById("search");
  let allComments = [];


  fetch("https://jsonplaceholder.typicode.com/comments")
    .then(response => response.json())
    .then(data => {
      allComments = data;
      showComments(allComments);
    });

  
  function showComments(comments) {
    container.innerHTML = "";
    if (comments.length === 0) {
      container.innerHTML = "<p>No se encontraron comentarios.</p>";
      return;
    }

    comments.forEach(comment => {
      const div = document.createElement("div");
      div.classList.add("comment");
      div.innerHTML = `
        <h3>${comment.name}</h3>
        <p><strong>Email:</strong> ${comment.email}</p>
        <p>${comment.body}</p>
      `;
      container.appendChild(div);
    });
  }

  
  searchInput.addEventListener("input", () => {
    const filter = searchInput.value.toLowerCase();
    const filtered = allComments.filter(c =>
      c.email.toLowerCase().includes(filter)
    );
    showComments(filtered);
  });

