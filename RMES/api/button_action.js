function set_actif(id)
{
  let btn_article = document.getElementById("actif_" + id.toString());

  if (btn_article.className === "red_btn")
  {
    btn_article.className = "green_btn";
    fetch("api/modify?id_article=" + id.toString() + "&green=1")
      .then(res => res.json())
      .then(res => { console.log(res); })
      .catch(error => { console.error("Error: ", error); });
  }
  else
  {
    btn_article.className = "red_btn";
    fetch("api/modify?id_article=" + id.toString() + "&green=0")
      .then(res => res.json())
      .then(res => { console.log(res); })
      .catch(error => { console.error("Error: ", error); });
  }
}

function delete_article(id)
{
  let article = document.getElementById("article_" + id.toString());
  article.remove();

  fetch("api/delete?id_article=" + id.toString())
    .then(res => res.json())
    .then(res => { console.log(res); })
    .catch(error => { console.error("Error: ", error); });
}
