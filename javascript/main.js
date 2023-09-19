const nombresDeCursos = [
    { nombre: 'Curso de Programación en Python', imagen: 'https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2' },
    { nombre: 'Curso de Programación en Java', imagen: 'https://1000marcas.net/wp-content/uploads/2020/11/Java-logo.jpg' },
    { nombre: 'Curso de Programación en C#', imagen: 'https://www.bairesdev.com/wp-content/uploads/2021/07/Csharp.svg' },
    { nombre: 'Curso de Programación en C', imagen: 'https://emiliopm.com/wp-content/uploads/2018/10/cursoCIntermedio.png' },
    { nombre: 'Curso de Programación en C++', imagen: 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1200px-ISO_C%2B%2B_Logo.svg.png' },
    { nombre: 'Curso de SQL', imagen: 'https://img-c.udemycdn.com/course/240x135/4411246_2f8c_2.jpg' },
    { nombre: 'Curso de Programación Backend', imagen: 'https://blog.facialix.com/wp-content/uploads/2021/03/curso-backend-facialix.jpg' },
    { nombre: 'Curso de React JS', imagen: 'https://blog.facialix.com/wp-content/uploads/2021/11/reactjs.jpg' },
    { nombre: 'Curso de Diseño Gráfico', imagen: 'https://weremote.net/wp-content/uploads/2022/07/paletas-colores-ordenador-escritorio.jpg' },
    { nombre: 'Curso de Administración', imagen: 'https://veracruz.uo.edu.mx/sites/default/files/pd3_PROMO-UOVER-compressed.jpeg' },
    { nombre: 'Curso de Marketing Digital', imagen: 'https://www.salesforce.com/content/dam/blogs/br/2021/por-que-investir-em-marketing-digital.jpg' }
];

// Función para crear el contenido de los cursos
function crearContenidoCurso(curso) {
  const divCurso = document.createElement("div");
  divCurso.classList.add("curso");

  const img = document.createElement("img");
  img.src = curso.imagen;
  img.alt = curso.nombre;

  const h3 = document.createElement("h3");
  h3.textContent = curso.nombre;

  divCurso.appendChild(img);
  divCurso.appendChild(h3);

  return divCurso;
}

// Obtén el contenedor de cursos
const cursoContainer = document.getElementById("cursoContainer");

// Genera y agrega el contenido de los cursos al contenedor
nombresDeCursos.forEach((curso) => {
  const contenidoCurso = crearContenidoCurso(curso);
  cursoContainer.appendChild(contenidoCurso);
});