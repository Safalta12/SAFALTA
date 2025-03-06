#include<stdio.h>
#include<pthread.h>
int shared=1;
void *fun1(){
    int x;
    x=shared;
    printf("Thread1 reads the value of shared variable as %d\n",x);
    x++;
    printf("Local updation by Thread1:%d\n",x);
    sleep(1);
    shared=x;
    printf("Value of shared variable updated by Thread1 is :%d\n",shared);
}
void *fun2(){
    int y;
    y=shared;
    printf("Thread2 reads the value of shared variable as %d\n",y);
    y--;
    printf("Local updation by Thread2:%d\n",y);
    sleep(1);
    shared=y;
    printf("Value of shared variable updated by Thread2 is :%d\n",shared);
}
int main(){
    p_thread thread1,thread2;
    p_thread_create(&thread1,NULL,fun1,NULL);
    p_thread_create(&thread2,NULL,fun2,NULL);
    p_thread_join(thread1,NULL);
    p_thread_join(thread2,NULL);
    printf("Final value of shared is %d\n",shared);
}