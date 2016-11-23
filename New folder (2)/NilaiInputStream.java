

import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author i15010
 */
public class NilaiInputStream extends InputStream{
    private InputStream component;
    ArrayList<String> l = new ArrayList<>();
    public int c;
    
    public NilaiInputStream(InputStream is){
        component = is;
    }
    
    @Override
    public int read() throws IOException {
        String kata = "";
        while ((c = component.read()) != -1) {
            if (c!=10){
                kata+=(char) c;
            } else {
                int i=0;
                boolean sudahAda = false;
                while (i<l.size()){
                    if (l.get(i).compareTo(kata) == 0){
                        sudahAda = true;
                    }
                    i++;
                }
                if (sudahAda == false){
                    l.add(kata);
                }
                kata="";
            }
        }
        if (c==-1){
            printAllName();
        }
        return c;
    }
    

    private void printAllName(){
        int i=0;
        while (i<l.size()){
            System.out.println(l.remove(i));
            i++;
        }
    }
    
}
