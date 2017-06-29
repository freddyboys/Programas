/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package webService;

import Clases.RentCar;
import static com.sun.corba.se.spi.presentation.rmi.StubAdapter.request;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author dfondos2
 */
@WebService(serviceName = "ServicioReservacion")
public class ServicioReservacion {
    
    
    

    /**
     * This is a sample web service operation
     */
    @WebMethod(operationName = "hello")
    public String hello(@WebParam(name = "name") String txt) {
       
        
        
        
        RentCar rCar= new RentCar();
       rCar.setAuto(txt);
       
        
        return "You have used for " + txt + " days";
    }

    /**
     * Web service operation
     */
    
    @WebMethod(operationName = "getTabla")
    public String getTabla(@WebParam(name = "numero") int numero) {
        //TODO write your implementation code here:
        String dato= "";
        for (int i=1; i<=10;i++)
        {
            int operacion = i*numero;
            dato+=operacion +", ";
        }
        
        
        return dato;
    }

    /**
     * Web service operation
     */
    @WebMethod(operationName = "carType")
    public String carType(@WebParam(name = "car") String car) {
        //TODO write your implementation code here:
      /*  if (car=="small"){
            car="40";
        
        }else if (car=="Sport"){
            car="40";
        }*/
        
        switch(car){
            case "small":
                car="40";
                break;
            
                case "Sport":
                car="60";
                break;
                
                case "SUV":
                car="100";
                break;
                
                default :
                        car="No exist";
                
        
        }
        
        int carValue=Integer.parseInt(car);
        
       
      
        
      
        
        int Subtotal=3*carValue;
        String subt=Integer.toString(Subtotal);
        
        
        int insu=7*3;
        String insuStr=Integer.toString(insu);
        
        double desc=Subtotal*0.05;
        String descStr=Double.toString(desc);
        
        double total= Subtotal-desc;
        String totalStr=Double.toString(total);
        
        
        //results
        String Insurance=insuStr;
        String Discount=descStr;
        String TotalPayment=totalStr;
        
       
        
           return "subtotal " + subt + " insuranceTotal" + Insurance + " discountPercentage " + Discount+ " totalPayment " + TotalPayment ;
    }
}
