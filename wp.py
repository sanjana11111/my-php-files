import random
import pyautogui as pg 
import time
animal=('good','better','love')
time.sleep(8)
for i in range(30):
    a=random.choice(animal)
    pg.write("you are a"+a)
    pg.press('enter')