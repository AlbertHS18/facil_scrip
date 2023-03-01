using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PrimerParcial
{
    public class Producto
    {
        private int IDProducto;
        private int Existencia;
        string IDCategoria;
        private string Nombre;
        private bool Activo = true;
        private double Precio;

        // constructor vacio de la clase

        public Producto()
        {

        } // fin del constructor vacio

        // constructor con parametros que permitirá crear instancias pasándole los valores que tendran las propiedades

        public Producto(int idproducto, string idcategoria, int existencia , String nombre, double precio, bool activo)
        {
            this.IDProducto = idproducto;           //Asigna a la propiedad IDProducto el valor del parámetro idproducto
            this.IDCategoria = idcategoria;         //Asigna a la propiedad IDCategoria el valor del parámetro idcategoria
            this.Nombre = nombre;                   //Asigna a la propiedad Nombre el valor del parámetro nombre
            this.Precio = precio;                   //                   //                   //              //
            this.Existencia = existencia;
            this.Activo = activo;

        } //FIN DEL CONSTRUCTOR VACIO QUE ACEPTA 6 PARAMETROS

        //metodos de acceso
        // Devuelve el valor de la propiedad IDProducto de la clase Producto

        public int getIDProducto()
        {
            return IDProducto;
        }// fin del metodo getIDProducto

        //Devuelve el valor de la propiedad IDCategoria de la clase Producto
        public string getIDCategoria()
        {
            return IDCategoria;
        } //fin del metodo getIDCategoria

        //Devuelve el valor de la propiedad Nombre de la clase Producto
        public String getNombre()
        {
            return Nombre;
        } //fin del metodo getNombre

        //Devuelve el valor de la propiedad Precio de la clase Producto
        public double getPrecio()
        {
            return Precio;
        } //fin del metodo getPrecio

        //Devuelve el valor de la propiedad Existencia de la clase Producto
        public int getExistencia()
        {
            return Existencia;
        } //fin del metodo getExistencia

        //Devuelve el valor de la propiedad Existencia de la clase Producto
        public bool getActivo()
        {
            return Activo;
        } //fin del metodo getExistencia

        //MÉTODOS DE MODIFICACION

        //Asigna el valor pasado como parámetro a la propiedad correspondiente de la clase Producto
        public void setIDProducto(int idproducto)
        {
            IDProducto = idproducto;
        }//fin del metodo setIDProducto

        //Asigna el valor pasado como parámetro a la propiedad correspondiente de la clase Producto
        public void setIDCategoria(string idcategoria)
        {
            this.IDCategoria = idcategoria;
        } //fin del metodo setIDCategoria

        //Asigna el valor pasado como parámetro a la propiedad correspondiente de la clase Producto
        public void setNombre(string nombre)
        {
            this.Nombre = nombre;
        } //fin del metodo setNombre

        //Asigna el valor pasado como parámetro a la propiedad correspondiente de la clase Producto
        public void setPrecio(double precio)
        {
            this.Precio = precio;
        } //fin del metodo setPrecio

        //Asigna el valor pasado como parámetro a la propiedad correspondiente de la clase Producto

        public void setExistencia(int existencia)
        {
            this.Existencia = existencia;
        } //fin del metodo setExistencia

        public void setActivo(bool activo)
        {
            this.Activo = activo;
        } //fin del metodo setExistencia

        //OTROS METODOS

        //Método para aumentar la cantidad en existencia de un producto

        public void AgregarAInventario(int cantidad)
        {
            if (this.Activo)
                this.Existencia += cantidad; //le agrega la cantidad de unidades a la existencia del producto

        } //fin del método AgregarAInventario

        //Método para reducir la cantidad en existencia de un producto
        public void ReducirInventario(int cantidad)
        {
            if (this.Activo)
                this.Existencia -= cantidad; //reduce la cantidad indicada a la existencia del producto

        } //fin del método ReducirInventario

    } //fin de la clase Producto
}

