/*
 AC - OpenMP -- SERIE
 fun_s.c
 rutinas que se utilizan en el modulo gengrupos_s.c
 ****************************************************************************/
#include <math.h>
#include <float.h>

#include "defineg.h"           // definiciones

///////////////////////////////////////////////////////////////////////////////////////////////
/* 1 - Funcion para calcular la distancia genetica entre dos elementos (distancia euclidea)
 Entrada:  2 elementos con NCAR caracteristicas (por referencia)
 Salida:  distancia (double)
 *************************************************************************************/
double gendist (float *elem1, float *elem2)
{
    // PARA COMPLETAR
    // calcular la distancia euclidea entre dos vectores
    double suma = 0;
    float dif = 0.0f;
    for(int i=0;i<NCAR;i++){
        
        dif = elem1[i]-elem2[i];
        suma = suma + pow((dif),2);
        
    }
    return sqrt(suma);
}



///////////////////////////////////////////////////////////////////////////////////////////////
/* 2 - Funcion para calcular el grupo (cluster) mas cercano (centroide mas cercano)
 Entrada:  nelem  numero de elementos, int
 elem   elementos, una matriz de tamano MAXE x NCAR, por referencia
 cent   centroides, una matriz de tamano NGRUPOS x NCAR, por referencia
 Salida:   popul  grupo mas ercano a cada elemento, vector de tamano MAXE, por referencia
 *****************************************************************************************/
void grupo_cercano (int nelem, float elem[][NCAR], float cent[][NCAR], int *popul)
{
    // PARA COMPLETAR
    // popul: grupo mas cercano a cada elemento
    double dist;
    int aux = 0;
    for (int i = 0; i < nelem; i++){
        
        double min = DBL_MAX;
        
        for (int j = 0; j < NGRUPOS; j++){
            
            dist = gendist(elem[i], cent[j]);
            if (min > dist){
                
                aux = j;
                min = dist;
            }
        }
        
        popul[i] = aux;
    }
}



///////////////////////////////////////////////////////////////////////////////////////////////
/* 3 - Funcion para calcular la densidad del grupo (dist. media entre todos sus elementos)
 Entrada:  elem     elementos, una matriz de tamano MAXE x NCAR, por referencia
 listag   vector de NGRUPOS structs (informacion de grupos generados), por ref.
 Salida:   densidad densidad de los grupos (vector de tamano NGRUPOS, por referencia)
 *****************************************************************************************/
void calcular_densidad (float elem[][NCAR], struct lista_grupos *listag, float *densidad)
{
    // PARA COMPLETAR
    // Calcular la densidad de los grupos:
    //        media de las distancia entre todos los elementos del grupo
    //        si el numero de elementos del grupo es 0 o 1, densidad = 0
    
    for (int i = 0; i < NGRUPOS; i++)
    {
        
        double cont = 0;
        double suma = 0;
        
        for (int j = 0; j < listag[i].nelemg-1; j++){
            
            for (int k = j+1; k < listag[i].nelemg; k++){
                
                suma = suma + gendist(elem[listag[i].elemg[j]], elem[listag[i].elemg[k]]);
                cont++;
                
            }
            
            
        }
        
        if(listag[i].nelemg>1){
            
            densidad[i] = suma / cont;
            
        }else{
            
            densidad[i] = 0.0f;
        }
        
    }
    
}



///////////////////////////////////////////////////////////////////////////////////////////////
/* 4 - Funcion para relizar el analisis de enfermedades
 Entrada:  listag   vector de NGRUPOS structs (informacion de grupos generados), por ref.
 enf      enfermedades, una matriz de tamano MAXE x TENF, por referencia
 Salida:   prob_enf vector de TENF structs (informacion del analisis realizado), por ref.
 *****************************************************************************************/
void analizar_enfermedades (struct lista_grupos *listag, float enf[][TENF], struct analisis *prob_enf)
{
    // PARA COMPLETAR
    // Realizar el analisis de enfermedades en los grupos:
    //        maximo y grupo en el que se da el maximo (para cada enfermedad)
    //        minimo y grupo en el que se da el minimo (para cada enfermedad)
    
    
    double max, min, probEnf;
    int grupomax, grupomin, elem;
    
    for(int k=0;k<TENF;k++){
        max=0;
        min=1;
        grupomax=0;
        grupomin=0;
        
        for(int i=0; i<NGRUPOS; i++){
            
            probEnf=0;
            
            for(int j=0;j<listag[i].nelemg;j++){
                
                elem=listag[i].elemg[j];
                probEnf=probEnf+enf[elem][k];
                
            }
            
            probEnf=probEnf/listag[i].nelemg;
            
            if(probEnf > max) {
                max=probEnf;
                grupomax=i;
            }
            
            if(probEnf < min) {
                
                min=probEnf;
                grupomin=i;
            }
            
        }
        prob_enf[k].max=max;
        prob_enf[k].min=min;
        prob_enf[k].gmax=grupomax;
        prob_enf[k].gmin=grupomin;
    }
}
