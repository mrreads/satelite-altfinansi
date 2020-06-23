if (document.querySelector('#typeText'))
{
    if(document.querySelector('#temptext'))
    {
        var typed = new Typed('#typeText', 
        {
            strings: [` Все статьй про ${document.querySelector('#temptext').textContent.toLowerCase()}`],
            typeSpeed: 25
        });
        document.querySelector('#temptext').remove();
    }
    else
    {
        var typed = new Typed('#typeText', 
        {
            strings: ["Мы строители.", "Мы помогаем.", "Блог о строительстве!"],
            typeSpeed: 150
        });
    }

}