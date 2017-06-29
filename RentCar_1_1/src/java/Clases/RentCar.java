/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Clases;

import webService.ServicioReservacion;

/**
 *
 * @author dfondos2
 */
public class RentCar {
    private String auto;
    private String car;
    
     ServicioReservacion serv= new ServicioReservacion();
    

    public String getCar() {
        
        //call method type car
        car=serv.carType(car);
        return car;
    }

    public void setCar(String car) {
        this.car = car;
    }
   
    

    public String getAuto() {
        
        auto=serv.hello(auto);
        return auto;
    }
    
    
    

    public void setAuto(String auto) {
        
        
        
        this.auto = auto;
        
        
        
    }
    
    
    
 
    
    
}
