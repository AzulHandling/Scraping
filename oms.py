# This is a sample Python script.
# Press Mayús+F10 to execute it or replace it with your code.
# Press Double Shift to search everywhere for classes, files, tool windows, actions, and settings
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)

driver.get("https://oms.ryanair.com/#/login")

search = driver.find_element_by_id("field-username-0-input")
search.send_keys("alcops@lesmahandling.com")

search = driver.find_element_by_id("field-password-0-input")
search.send_keys("Alcops2019")

search.send_keys(Keys.RETURN)

link = driver.find_element_by_class_name("status status--unknown")
link.send_keys(Keys.RETURN)






