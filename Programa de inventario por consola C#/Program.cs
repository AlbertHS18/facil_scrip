using System;
using System.Collections.Generic;
using System.Collections;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PrimerParcial
{
    class Program
    {
        static void Main(string[] args)
        {
            int menuopcion;

            Producto producto = new Producto();     /*Instancia u objeto de producto*/
            CategoriaProducto categoria = new CategoriaProducto(); /*iNSTANCIA*/
            ArrayList AProducto = new ArrayList();  //array que guarda los productos
            ArrayList ListaCategorias = new ArrayList();    //array que guarda las categorias

            ListaCategorias.Add(new CategoriaProducto("001", "Detergente", true));    //Agregando una categoria en la lista

            AProducto.Add(new Producto(1, "001", 500, "Suavitel", 15, true)); //agregando productos a la lista
            AProducto.Add(new Producto(2, "001", 40, "Ace", 25, false));

            do
            {
                Console.Clear();
                Cuadro(1, 80, 1, 7);        //Invocacion al metodo cuadro con valores para sus parametros 
                Titulos();                  //Invocacion al metodo que muestra los titulos
                Menu();                     //Invocacion al metodo que muestra las opciones del menu
                menuopcion = Menuchoise();  //Invocacion al metodo para capturar la opcion elegida
                DoChoise(menuopcion, AProducto, producto, ListaCategorias, categoria);       //Invocacion al metodo que ejecutara la opcion correspodiente

                Console.ReadKey();

            } while (menuopcion != 0);

        }

        // metodo que escribe el cuadro 

        public static void Cuadro(int x1, int x2, int y1, int y2)
        {
            {
                //creamos las lineas horizontales
                for (int x = x1; x <= x2; x++)
                {
                    Console.SetCursorPosition(x, y1); Console.Write('═');
                    Console.SetCursorPosition(x, y2); Console.Write('═');
                }

                //creamos las lineas verticales
                for (int y = y1; y <= y2; y++)
                {
                    Console.SetCursorPosition(x1, y); Console.Write('║');
                    Console.SetCursorPosition(x2, y); Console.Write('║');
                }
                Console.SetCursorPosition(x1, y1); Console.Write("╔");
                Console.SetCursorPosition(x2, y1); Console.Write("╗");
                Console.SetCursorPosition(x1, y2); Console.Write("╚");
                Console.SetCursorPosition(x2, y2); Console.Write("╝");

            }
        }

        public static void Titulos()
        {
            string t1 = "Empresas Los Vendedores, S. A.",
                t2 = "El placer del buen servicio",
                t3 = "Sistena de inventario",
                t6 = "Menu Principal";

            Console.SetCursorPosition((80 - t1.Length) / 2, 2); Console.Write(t1);
            Console.SetCursorPosition((80 - t2.Length) / 2, 3); Console.Write(t2);
            Console.SetCursorPosition((80 - t3.Length) / 2, 4); Console.Write(t3);
            Console.SetCursorPosition((80 - t6.Length) / 5, 9); Console.Write(t6);

        }

        public static void Menu()
        {
            Console.SetCursorPosition(15, 11); Console.Write("1- Registrar categoria de productos");
            Console.SetCursorPosition(15, 12); Console.Write("2- Registrar productos");
            Console.SetCursorPosition(15, 13); Console.Write("3- Aumentar inventario");
            Console.SetCursorPosition(15, 14); Console.Write("4- Reducir inventario");
            Console.SetCursorPosition(15, 15); Console.Write("5- Consultar inventario");
            Console.SetCursorPosition(15, 16); Console.Write("6- Consultar por categoría");
            Console.SetCursorPosition(15, 17); Console.Write("0- Salir");
        }


        public static int Menuchoise()
        {
            int op = 20;
            do
            {
                try
                {
                    Console.SetCursorPosition(15, 20); Console.Write("Su opcion: ");
                    op = Convert.ToInt32(Console.ReadLine());
                    if (op < 0 || op > 6)
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine("Ha elegido una opcion no valida");
                    }
                }
                catch (Exception e)
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine(e.Message);
                }
            } while (op < 0 || op > 6);
            return op;
        }

        public static void DoChoise(int opcion, ArrayList AProducto, Producto producto, ArrayList ListaCats, CategoriaProducto categ)
        {
            switch (opcion)
            {
                case 1:
                    Rcategorias(ListaCats, categ);
                    //Console.SetCursorPosition(20, 24); Console.Write("Opcion 1");
                    break;

                case 2:
                    Rproducto(AProducto, producto, ListaCats, categ);
                    //Console.SetCursorPosition(20, 24); Console.Write("Opcion 2");
                    break;

                case 3:
                    AumentarIn(AProducto, producto);
                    break;

                case 4:
                    DisminuirInventario(AProducto, producto);
                    //Console.SetCursorPosition(20, 24); Console.Write("Opcion 4");
                    break;

                case 5:
                    ConsultarIn(AProducto, producto);
                    //Console.SetCursorPosition(20, 24); Console.Write("Opcion 5");
                    break;

                case 6:
                    ConsultarCateg(AProducto, producto, ListaCats, categ);
                    //Consultar las Por Categorias
                    break;
            }
        }

        public static void Rproducto(ArrayList AProd, Producto prod, ArrayList ListaCategorias, CategoriaProducto categoria)
        {
            int vidprod = 0, vexistencia = 0;
            string vidcategoria = "";
            double vprecio = 0.0;
            string vnombre = "";
            bool vactivo = true;

            int fila = 14;

            List<string> listaIdsCat = new List<string>();  // lista para almacenar los ids de categorias
            List<int> listaIDProductos = new List<int>();  // lista para almacenar los ids de productos 

            limpia(1, 79, 8, 20); //metodo que limpia la pantalla

            Console.SetCursorPosition(2, 10); Console.Write("Registrar Nuevos Productos");

            foreach (Producto c in AProd)
            {
                listaIDProductos.Add(c.getIDProducto());
            }

            // Tomando el valor IDP

            bool IDp = true;

            while (IDp || vidprod < 0 || listaIDProductos.Contains(vidprod))
            {

                try
                {
                    Console.SetCursorPosition(2, 13); Console.Write("ID Producto--------> ");
                    vidprod = Convert.ToInt32(Console.ReadLine());

                    if (vidprod < 0)
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine("Error, el ID no puede ser un número menor que 0             ");
                    }
                    else if (listaIDProductos.Contains(vidprod))
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine("Error, el ID ya existe");
                    }
                    else
                        IDp = false;
                }

                catch (Exception a)
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine(a.Message);

                }

            }

            //Imprimir catgorias con ids

            // -----------CATEGORIAS----------------------

            Console.BackgroundColor = ConsoleColor.DarkGreen;
            Console.ForegroundColor = ConsoleColor.Black;

            for (int x = 50; x < 69; x++)
            {
                Console.SetCursorPosition(x, 12); Console.Write(" ");

            }

            Console.SetCursorPosition(45, 12); Console.Write(" Categorías   ");
            Console.SetCursorPosition(60, 12); Console.Write("  ID ");
            Console.SetCursorPosition(67, 12); Console.Write("Estado  ");

            Console.ResetColor();

            foreach (CategoriaProducto c in ListaCategorias)
            {
                Console.SetCursorPosition(45, fila); Console.WriteLine(c.getNombreCategoria());
                Console.SetCursorPosition(62, fila); Console.WriteLine(c.getIDCategoriaProducto());
                Console.SetCursorPosition(67, fila); Console.WriteLine(c.getEstadoCategoria() ? "Activo" : "Inactivo");
                fila++;
            }

            //--------------------------------

            // guardando los valores en un array para verificar si existe el id ingresado

            foreach (CategoriaProducto c in ListaCategorias)
            {
                listaIdsCat.Add(c.getIDCategoriaProducto());
            }

            // tomando id categoria

            do
            {
                Console.SetCursorPosition(2, 14); Console.Write("ID Categoría-------> ");
                vidcategoria = Console.ReadLine();

                if (!listaIdsCat.Contains(vidcategoria))
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine("El ID ingresado no existe en la lista               ");

                }
            }
            while (!listaIdsCat.Contains(vidcategoria));

            // limpiando la linea 24
            for (int x = 0; x < 70; x++)

            {
                Console.SetCursorPosition(x, 24); Console.WriteLine(" ");
            }

            // si la categoria esta activa poner el producto activo

            foreach (CategoriaProducto c in ListaCategorias)
            {
                if (c.getIDCategoriaProducto() == vidcategoria)
                {
                    vactivo = c.getEstadoCategoria();
                }
            }

            // Para que no se repita el nombre

            ArrayList nombresP = new ArrayList();

            // guardando los nombres en la lista
            foreach (Producto p in AProd)
            {
                nombresP.Add(p.getNombre());
            }

            while (nombresP.Contains(vnombre) || vnombre == "" || vnombre == " ")
            {
                Console.SetCursorPosition(2, 15); Console.Write("Nombre-------------> ");
                vnombre = Console.ReadLine();

                if (nombresP.Contains(vnombre))
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine("Error, el nombre ya existe                         ");
                }
                else if (vnombre == "" || vnombre == " ")
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine("Error, el nombre no puede estar en blanco                         ");
                }
            }

            // Entrada de la existencia 

            bool Exist = true;

            while (Exist || vexistencia < 0)
            {
                try
                {
                    Console.SetCursorPosition(2, 16); Console.Write("Existencia---------> ");
                    vexistencia = Convert.ToInt32(Console.ReadLine());

                    if (vexistencia < 0)
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine("Error, el precio no puede ser un número menor que 0             ");

                    }
                    else
                    {
                        Exist = false;
                    }

                }
                catch (Exception e)
                {

                    Console.SetCursorPosition(20, 24); Console.WriteLine(e.Message);
                }

            }

            // tomando precio

            bool Prec = true;

            while (Prec || vprecio < 0)
            {
                try
                {

                    Console.SetCursorPosition(2, 17); Console.Write("Precio-------------> ");
                    vprecio = double.Parse(Console.ReadLine());

                    if (vprecio <= 0)
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine("Error, el precio no puede ser un número menor que 0             ");

                    }
                    else
                    {
                        Prec = false;
                    }
                }
                catch (Exception e)
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine(e.Message);
                }

            }

            // Agrego el nuevo objeto al final del arraylist

            AProd.Add(new Producto(vidprod, vidcategoria, vexistencia, vnombre, vprecio, vactivo));

            Console.SetCursorPosition(20, 24); Console.WriteLine("Producto registrado satisfactoriamente!               ");


        }   //fin del metodo registrar producto


        public static void ConsultarIn(ArrayList Aprod, Producto prod)
        {

            int fila = 12;
            limpia(1, 79, 8, 20);

            Console.SetCursorPosition(28, 09); Console.Write("Productos del Inventario");
            Console.BackgroundColor = ConsoleColor.Blue;
            Console.ForegroundColor = ConsoleColor.Black;
            Console.SetCursorPosition(1, 11); Console.Write("IDProducto|IDCategoria| Nombre del producto |Existencia|   Precio   |Estado ");
            Console.ResetColor();


            foreach (Producto p in Aprod)
            {
                {

                }

                for (int X = 0; X < 77; X++)
                {
                    Console.SetCursorPosition(X + 1, fila); Console.Write(" ");
                }

                Console.SetCursorPosition(2, fila); Console.Write(p.getIDProducto());
                Console.SetCursorPosition(13, fila); Console.Write(p.getIDCategoria());
                Console.SetCursorPosition(25, fila); Console.Write(p.getNombre());
                Console.SetCursorPosition(50, fila); Console.Write(p.getExistencia());
                Console.SetCursorPosition(61, fila); Console.Write(p.getPrecio());
                Console.SetCursorPosition(70, fila); Console.Write(p.getActivo() ? "Activo" : "Inactivo");
                fila++;

            }
            Console.SetCursorPosition(2, Aprod.Count + 12);

        }



        //Metodo para aumentar la cantidad de un producto

        public static void AumentarIn(ArrayList Aprod, Producto prod)
        {
            int fila = 15;
            int fila2 = 15;
            bool actInac = true;    //Para guardar si el objeto esta activo o no

            int contador = 0;

            int cantidad = 0;
            string nombre = "";
            ArrayList Nombres = new ArrayList();
            bool AumenV = true;

            limpia(1, 79, 8, 20);   //limpiando la pantalla


            //guardando los nombres de los productos en una nueva lista

            foreach (Producto p in Aprod)
            {
                Nombres.Add(p.getNombre());
            }

            Console.SetCursorPosition(6, 10); Console.Write("Aumentar Inventario");

            //-----------CUADRO PRODUCTOS----------------

            Console.BackgroundColor = ConsoleColor.DarkGreen;

            Console.SetCursorPosition(4, 13); Console.Write("   Productos   ");
            Console.ResetColor();

            foreach (string p in Nombres)
            {
                Console.SetCursorPosition(4, fila); Console.Write(p);
                fila++;
            }
 
            Console.ResetColor();


            // ---------------CUADRO CANTIDAD---------------

            Console.BackgroundColor = ConsoleColor.Blue;
            Console.SetCursorPosition(20, 13); Console.Write(" Cant. ");
            Console.ResetColor();

            foreach (Producto p in Aprod)
            {
                Console.SetCursorPosition(20, fila2); Console.Write(p.getExistencia());
                fila2++;
            }


            // Ciclo que va a seguir pidiendo el nombre mientras se ingrese uno que no esta en la lista
            // entrada del nombre
            do
            {

                Console.SetCursorPosition(7, 21); Console.Write("(Presione 0 para salir)");
                Console.SetCursorPosition(6, 20); Console.Write("Nombre del producto a aumentar: ");
                nombre = Console.ReadLine();

                if (nombre == "0")
                {
                    break;
                }

                if (!Nombres.Contains(nombre))
                {
                    Console.SetCursorPosition(20, 24); Console.Write($"{nombre} no existe en la lista");
                }

                // Para comprobar si el producto esta activo

                foreach (Producto x in Aprod)
                {
                    if (nombre == x.getNombre())
                    {
                        actInac = x.getActivo();
                    }
                }

                if (!actInac)
                {
                    Console.SetCursorPosition(20, 24); Console.Write("* * * No se puede aumentar stock a una línea descontinuada * * *                  ");
                }


            } while (!Nombres.Contains(nombre) || !actInac);
            actInac = true;     //Devolviendo a activo para que no muestre el mensaje de error

            // Entrada de cantiad
            if (nombre != "0")
            {

                while (AumenV || cantidad < 0)
                {

                    try
                    {
                        Console.SetCursorPosition(36, 13); Console.Write("Cantidad a aumentar----------> ");
                        cantidad = Convert.ToInt32(Console.ReadLine());
                        AumenV = false;

                        if (cantidad < 0)
                        {
                            Console.SetCursorPosition(20, 24); Console.Write("Error la cantidad a reducir no puede ser menor que 0                ");
                        }
                    }
                    catch (Exception e)
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine(e.Message + "          ");
                    }

                }
                // Actualizando la cantidad
                foreach (Producto j in Aprod)
                {


                    if (j.getNombre() == nombre)
                    {
                        j.AgregarAInventario(cantidad);
                        Console.SetCursorPosition(20, 24); Console.WriteLine("Producto actualizado correctamente!                     ");

                        break;
                    }

                    contador++;
                }

            }

        }

        //Metodo para registrar nuevas categorias

        public static void Rcategorias(ArrayList LCategs, CategoriaProducto categoria)
        {
            string nombreC = "";
            int estadoC = 0;
            string codigoString = "00";
            bool estadoCF;
            bool Estado = true;
            List<string> listaNombresCat = new List<string>();  // lista para almacenar los nombres y comprobar que no se repitan

            // obteniendo los nombres de la categoria en una lista

            foreach (CategoriaProducto c in LCategs)
            {
                listaNombresCat.Add(c.getNombreCategoria());
            }

            limpia(1, 79, 8, 20);   //LIMPIANDO LA PANTALLA

            Console.SetCursorPosition(2, 10); Console.Write("Registrar Categorias");

            // Entrada del nombre de la categoria

            while (nombreC == "" || nombreC == " " || listaNombresCat.Contains(nombreC))    // no aceptar valor vacio ni repetido
            {
                Console.SetCursorPosition(2, 13); Console.Write("Nombre de la categoria------> ");
                nombreC = Console.ReadLine();

                if (nombreC == "" || nombreC == " ")
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine("Error - El nombre de la categoria no puede estar en blanco                     ");
                }

                else if (listaNombresCat.Contains(nombreC))
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine("Error - Ya existe una categoria con ese nombre                     ");
                }
            }

            // tomando el estado de la categoria

            while (Estado)
            {
                try
                {
                    Console.SetCursorPosition(2, 15); Console.Write("Ingrese 1 o 2 para seleccionar el Estado de la Categoria.");
                    Console.SetCursorPosition(2, 17); Console.Write("1- Activa");
                    Console.SetCursorPosition(2, 18); Console.Write("2- Inactiva");
                    Console.SetCursorPosition(2, 20); Console.Write("Estado de la categoria-------> ");

                    estadoC = int.Parse(Console.ReadLine());

                    while (estadoC != 1 && estadoC != 2)    //para que solo tome los valores 1 y 2
                    {
                        Console.SetCursorPosition(20, 24); Console.Write("Opcion inexistente, elija 1 o 2 solamente          ");
                        Console.SetCursorPosition(43, 19); estadoC = int.Parse(Console.ReadLine());

                    }

                    Estado = false;  // si no ocurre una execpcion finaliza el ciclo
                }
                catch (Exception e)
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine(e.Message + "          "); // mostrando el mensaje de error en pantalla
                }
            }

            //convertir el estado de entero a bool

            if (estadoC == 1)
            {
                estadoCF = true;
            }
            else
            {
                estadoCF = false;
            }

            // creando el código string de la categoria 

            codigoString += categoria.getContadorCats().ToString();

            // guardando el objeto de la clase categoria en el array de categorias

            LCategs.Add(new CategoriaProducto(codigoString, nombreC, estadoCF));

            //LLamado de la funcion para aumentar el contador de codigo de clase

            categoria.aumentaContadorCat();

            Console.SetCursorPosition(20, 24); Console.WriteLine("**** Categoria registrada correctamente ****                                       ");

        }


        //Metodo para aumentar la cantidad de un producto

        public static void DisminuirInventario(ArrayList Aprod, Producto prod)
        {


            //int contador = 0;

            int fila = 15;
            int fila2 = 15;

            bool actInac = true;    //Para guardar si el objeto esta activo o no

            int cantidad = 0;
            string nombre = "";
            ArrayList Nombres = new ArrayList();
            bool Dism = true;
            int exist = 0;

            limpia(1, 79, 8, 20);   //limpiando la pantalla


            //guardando los nombres de los productos en una nueva lista

            foreach (Producto p in Aprod)
            {
                Nombres.Add(p.getNombre());
            }
            Console.SetCursorPosition(6, 10); Console.Write("Disminuir Inventario");

            //-----------CUADRO PRODUCTOS----------------

            Console.BackgroundColor = ConsoleColor.DarkGreen;
            Console.SetCursorPosition(4, 13); Console.Write("   Productos   ");
            Console.ResetColor();

            foreach (string p in Nombres)
            {
                Console.SetCursorPosition(4, fila); Console.Write(p);
                fila++;
            }

            Console.ResetColor();

            //-----------CUADRO CANTIDAD--------

            Console.BackgroundColor = ConsoleColor.DarkRed;
            Console.SetCursorPosition(20, 13); Console.Write(" Cant. ");
            Console.ResetColor();

            foreach (Producto p in Aprod)
            {
                Console.SetCursorPosition(20, fila2); Console.Write(p.getExistencia());
                fila2++;
            }

            // Ciclo que va a seguir pidiendo el nombre mientras se ingrese uno que no esta en la lista

            do
            {
                Console.SetCursorPosition(7, 21); Console.Write("(Presione 0 para salir)");

                Console.SetCursorPosition(6, 20); Console.Write("Nombre del producto a disminuir: ");
                nombre = Console.ReadLine();

                if (nombre == "0")
                {
                    break;

                }

                if (!Nombres.Contains(nombre))
                {
                    Console.SetCursorPosition(20, 24); Console.Write($" {nombre} no existe en la lista");
                }

                // Para comprobar si el producto esta activo

                foreach (Producto x in Aprod)
                {
                    if (nombre == x.getNombre())
                    {
                        actInac = x.getActivo();
                    }
                }

                if (!actInac)
                {
                    Console.SetCursorPosition(20, 24); Console.Write("* * * No se puede reducir stock a una línea descontinuada * * *                  ");
                }


            } while (!Nombres.Contains(nombre) || !actInac);
            actInac = true; //Devolviendo a activo para que no muestre el mensaje de error

            if (nombre != "0")
            {


                //Para pedir la cantidad a pesar de errores

                while (Dism)
                {

                    try
                    {
                        while (true)
                        {

                            Console.SetCursorPosition(36, 13); Console.Write("Cantidad a reducir--------> ");
                            cantidad = Convert.ToInt32(Console.ReadLine());

                            //obteniendo la existencia del producto

                            foreach (Producto p in Aprod)
                            {
                                if (nombre == p.getNombre())
                                {
                                    exist = p.getExistencia();
                                }
                            }

                            if (cantidad > exist)
                            {

                                Console.SetCursorPosition(20, 24); Console.Write("Error, la cantidad a reducir no puede ser mayor a la existente              ");
                            }

                            else if (cantidad < 0)
                            {
                                Console.SetCursorPosition(20, 24); Console.Write("Error, la cantidad a reducir no puede ser negativa ");
                            }

                            else
                                break;

                        }


                        Dism = false;
                    }
                    catch (Exception e)
                    {
                        Console.SetCursorPosition(20, 24); Console.WriteLine(e.Message + "                ");
                    }

                }
                // Actualizando la cantidad

                foreach (Producto j in Aprod)
                {

                    if (j.getNombre() == nombre)
                    {
                        j.ReducirInventario(cantidad);     //llamado de la funcion reducirInventario()

                        Console.SetCursorPosition(20, 24); Console.WriteLine("Producto actualizado correctamente!                                 ");

                        break;
                    }

                    //contador++;
                }
            }
        }

        // metodo para ver por categorias 

        public static void ConsultarCateg(ArrayList Aprod, Producto prod, ArrayList ListaCategorias, CategoriaProducto categoria)
        {
            int fila = 16;
            int fila2 = 14;
            string nombreC = "";
            List<string> listaNombreCat = new List<string>();  // lista para almacenar los nombres de la categoria

            // guardando los nombres de las categorias en la lista
            foreach (CategoriaProducto c in ListaCategorias)
            {
                listaNombreCat.Add(c.getNombreCategoria());
            }

            limpia(1, 79, 8, 20);

            Console.SetCursorPosition(6, 10); Console.Write("Consultar Por Categorias");

            // ------------Tabla con las categorias existentes------------
            Console.BackgroundColor = ConsoleColor.DarkBlue;
            Console.ForegroundColor = ConsoleColor.Black;
            Console.SetCursorPosition(1, 14); Console.WriteLine("   Categoría   |  ID  |  Estado  ");
            Console.ResetColor();
            //escribiendo las categorias

            foreach (CategoriaProducto c in ListaCategorias)
            {

                Console.SetCursorPosition(2, fila); Console.WriteLine(c.getNombreCategoria());
                Console.SetCursorPosition(18, fila); Console.WriteLine(c.getIDCategoriaProducto());
                Console.SetCursorPosition(25, fila); Console.WriteLine(c.getEstadoCategoria() ? "Activo" : "Inactivo");
                fila++;
            }

            Console.ForegroundColor = ConsoleColor.DarkBlue;
            Console.ResetColor();


            // ENTRADA DEL NOMBRE DE LA CATEGORIA A BUSCAR


            while (!listaNombreCat.Contains(nombreC))
            {
                Console.SetCursorPosition(2, 20); Console.Write("Nombre de la categoría a buscar: ");
                nombreC = Console.ReadLine();

                if (!listaNombreCat.Contains(nombreC))
                {
                    Console.SetCursorPosition(20, 24); Console.WriteLine("Error - El nombre indicado no existe                     ");

                }
            }


            // mostrar la categoria indicada

            limpia(1, 85, 8, 30);

            Console.BackgroundColor = ConsoleColor.DarkRed;
            Console.SetCursorPosition(30, 10); Console.Write($"   {nombreC.ToUpper()}   ");
            Console.ResetColor();

            Console.BackgroundColor = ConsoleColor.Blue;
            Console.SetCursorPosition(1, 12); Console.Write(" IDProducto |IDCategoria|   Nombre del producto  |Existencia|  Precio | Estado ");
            Console.ResetColor();

            foreach (Producto p in Aprod)
            {

                // si el producto pertence a la categoria
                // con el nombre obtengo el id, en cada iteracion obtengo el id

                string idCat = "";

                foreach (CategoriaProducto c in ListaCategorias)
                {
                    if (c.getNombreCategoria() == nombreC)
                    {
                        idCat = c.getIDCategoriaProducto();
                    }
                }
                if (idCat == p.getIDCategoria())
                {
                    for (int i = 1; i < 80; i++)
                    {
                        Console.SetCursorPosition(i, fila2); Console.WriteLine(" ");
                    }

                    Console.SetCursorPosition(4, fila2); Console.Write(p.getIDProducto());
                    Console.SetCursorPosition(15, fila2); Console.Write(p.getIDCategoria());
                    Console.SetCursorPosition(27, fila2); Console.Write(p.getNombre());
                    Console.SetCursorPosition(52, fila2); Console.Write(p.getExistencia());
                    Console.SetCursorPosition(63, fila2); Console.Write(p.getPrecio());
                    Console.SetCursorPosition(72, fila2); Console.Write(p.getActivo() ? "Activo" : "Inactivo");
                    fila2++;
                }
                

            }

        }

        public static void limpia(int x1, int x2, int y1, int y2)
        {
            for (int x = x1; x <= x2; x++)
            {
                for (int y = y1; y <= y2; y++)
                {
                    Console.SetCursorPosition(x, y); Console.Write(" ");
                }
            }
        }   // fin del método limpia

    }   // fin de la clase program
}
