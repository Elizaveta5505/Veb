//Ищем кнопку вперед, у нас это кнопка "Вправо"
let classbtnRight = document.querySelector(".btnRight")
//Берем слайды
let varslides = document.querySelectorAll("img")
//Объявляем базовую переменную для условия
let i = 0;
//Создаем функцию, которая считывает нажатие клавиши
classbtnRight.addEventListener("click", function(){
  //увеличиваем переменную, перещелкивая фотографии
  ++i;
  //если фотографий больше нет
  if(i>=varslides.length){
    //удаляем класс block у предыдущего слайда
    varslides[i-1].classList.remove("block")
    //После окончания прохода, обнуляем счетчик
    let i = 0;
    //даем "флажок" - передаем класс блок новому изображению
    varslides[i].classList.add("block")
} else {
  varslides[i-1].classList.remove("block")
  varslides[i].classList.add("block")

  }


})