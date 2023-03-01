using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PrimerParcial
{
    public class CategoriaProducto
    {
        private string IDCategoriaProducto;
        private string NombreCategoria;
        private bool EstadoCategoria;
        private static int contadorCat = 2;

        // Constructor vacio

        public CategoriaProducto()
        {

        }

        // constructor que recibe parametros

        public CategoriaProducto(string idCateg, string nomCateg, bool estCateg)
        {
            this.IDCategoriaProducto = idCateg;
            this.NombreCategoria = nomCateg;
            this.EstadoCategoria = estCateg;
        }


        //Métodos de acceso

        // devuelve el valor idcategoriaproducto

        public string getIDCategoriaProducto()
        {
            return IDCategoriaProducto;
        }

        // devuelve el valor idcategoriaproducto

        public string getNombreCategoria()
        {
            return NombreCategoria;
        }

        // devuelve el estado 

        public bool getEstadoCategoria()
        {
            return EstadoCategoria;
        }

        // devuelve el contador de categorias

        public int getContadorCats()
        {
            return contadorCat;
        }


        //metodos modificadores

        // cambia el valor del id categoria producto

        public void setIDCategoriaProducto(string IdCat)
        {
            this.IDCategoriaProducto = IdCat;
        }

        // cambia el valor del nombre categoria producto

        public void setNombreCategoria(string nombreCat)
        {
            this.NombreCategoria = nombreCat;
        }

        // cambia el valor del nombre categoria producto

        public void setEstadoCategoria(bool estadoCat)
        {
            this.EstadoCategoria = estadoCat;
        }

        // metodo para aumentar el contador del codigo de las categorias

        public void aumentaContadorCat()
        {
            contadorCat ++;
        }
 
    }
}
