from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.action_chains import ActionChains
import time


#browser exposes an executable file
#Through Selenium test we will invoke the executable file which will then #invoke actual browser
driver = webdriver.Chrome(executable_path="C://temp//chromedriver.exe")
# to maximize the browser window
driver.maximize_window()
#get method to launch the URL
driver.get("https://www.makemytrip.com/hotels/")
#to refresh the browser
# driver.refresh()
# element=driver.find_element(By.ID,"historical-truth")
# element.click()
time.sleep(4)
s = driver.find_element_by_id("1500-2500")
# perform click with execute_script method
driver.execute_script("arguments[0].click();",s)

time.sleep(4)
s = driver.find_element_by_id("0-1500")
# perform click with execute_script method
driver.execute_script("arguments[0].click();",s)

time.sleep(4)
s = driver.find_element_by_id("2500-5000")
# perform click with execute_script method
driver.execute_script("arguments[0].click();",s)

time.sleep(4)
s = driver.find_element_by_id("5000-2147483647")
# perform click with execute_script method
driver.execute_script("arguments[0].click();",s)

time.sleep(4)
s = driver.find_element_by_id("1500-2500")
# perform click with execute_script method
driver.execute_script("arguments[0].click();",s)


time.sleep(10)
#to close the browser
driver.close()

