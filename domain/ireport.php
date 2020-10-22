<?php

/**
 * Abstracción de un reporte
 * 
 * ¿Qué es un Reporte?
 * Es una salida(output) del sistema con la intención de
 * informar a una persona o ungrupo sobre informacuón concreta
 * del sistema.
 * 
 * ¿Qué acciones tiene?
 * 
 *  + Generar
 *     Ordena la información y la muestra de manera ordenada.
 *     LLena la información de un template con los datos obtenidos de una
 *     fuente externa.
 */

interface IReport {
    public function generate();
}