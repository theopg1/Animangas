FROM python:latest

COPY . /app

WORKDIR /app

RUN pip install -r requirements.txt

ENTRYPOINT ["python", "./main.py"]

CMD ["main.py", "scraping.py"]