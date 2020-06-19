if (document.querySelector('#typeText'))
{
    var typed = new Typed('#typeText', 
    {
        strings: ["Мы строители.", "Мы помогаем.", "Блог о строительстве!"],
        typeSpeed: 150
    });
}

if (document.querySelector('#forArticles'))
{
    let tempArticle, articleTitle, articleText, articleImage;
    const elemArticles = document.querySelector('#forArticles');
    
    articles.forEach(article => 
    {
        tempArticle = document.createElement('a');
        tempArticle.classList.add('content__article');
        tempArticle.href = `./article.html?id=${article['id']}`;

        articleImage = document.createElement('img');
        articleImage.classList.add('article__image');
        articleImage.src = article['img-link']
    
        articleContent = document.createElement('div');
        articleContent.classList.add('article__textContent');
        
        articleTitle = document.createElement('h2');
        articleTitle.innerHTML = article['title'];
        
        articleContent.appendChild(articleTitle);
        
        articleText = document.createElement('p');
        articleText.innerHTML = article['mini-text'];
        articleContent.appendChild(articleText);
    
        tempArticle.appendChild(articleImage);
        tempArticle.appendChild(articleContent);
    
        elemArticles.appendChild(tempArticle);
    });
}
else if (document.querySelector('#forArticle'))
{
    let isFound = false;
    const idFromUrl = parseInt(location.href.split('?id=')[1]);
    for (article of articles)
    {
        if (idFromUrl === article['id'])
        {
            isFound = true;
            
            const elemArticle = document.querySelector('#forArticle');

            tempArticle = document.createElement('div');
            tempArticle.classList.add('content__article');
        
            articleImage = document.createElement('img');
            articleImage.classList.add('article__image');
            articleImage.src = article['img-link']
        
            articleContent = document.createElement('div');
            articleContent.classList.add('article__textContent');
            
            articleTitle = document.createElement('h1');
            articleTitle.innerHTML = article['title'];
            tempArticle.appendChild(articleTitle);
            
            articleText = document.createElement('p');
            articleText.innerHTML = article['full-text'];
            articleContent.appendChild(articleText);
        
            tempArticle.appendChild(articleImage);
            tempArticle.appendChild(articleContent);
        
            elemArticle.appendChild(tempArticle);
        }
    }

    if (isFound === false)
    {
        window.location.href = '404.html'; 
    }
}
else
{
    if (!location.pathname.indexOf(404) === 1)
    {
        window.location.href = '404.html';
    }
    
}