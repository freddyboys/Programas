/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package picoplaca;

import com.sun.org.apache.xerces.internal.impl.dv.xs.DateTimeDV;
import java.util.Arrays;
import java.util.Scanner;

/**
 *
 * @author dfondos2
 */
public class Picoplaca {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here

        String placa;
        String date;
        
       

        DateTimeDV time;

        System.out.println("Ingrese la placa");
        Scanner sc = new Scanner(System.in);

        placa = sc.nextLine();
         //uso la funcion
        String plate = platenumber(placa);

        System.out.println("Ingrese el dia (Lunes - Martes - Miercoles - Jueves - Viernes)");
        Scanner dt = new Scanner(System.in);
        date = dt.nextLine();

        //System.out.println("la fecha  es -->" + date);
       
        
        //System.out.println(plate);
        //validacion de dias de placa
       
       
         
         if("Lunes".equals(date) && ("1".equals(plate)||"2".equals(plate))){
             System.out.println("No");
         }else if ("Martes".equals(date) && ("3".equals(plate)||"4".equals(plate))) {
            System.out.println("No");
        }else if ("Miercoles".equals(date) && ("5".equals(plate)||"6".equals(plate))) {
            System.out.println("No");
        }else if ("Jueves".equals(date) && ("7".equals(plate)||"8".equals(plate))) {
            System.out.println("No");
        }else if ("Viernes".equals(date) && ("9".equals(plate)||"0".equals(plate))) {
            System.out.println("No");
        }
         
         
         
         else{
              System.out.println("Si");
         }
       
            
    

    }

  

    public static String platenumber(String plc) {
        String[] arr = new String[plc.length()];
        for (int i = 0; i < plc.length(); i++) {
            arr[i] = String.valueOf(plc.charAt(i));
        }
       // System.out.println(arr[plc.length() - 1]);
        //retorno el ultimo digito
        return arr[plc.length() - 1];

    }

}
