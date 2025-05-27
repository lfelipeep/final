from fastapi import FastAPI
from fastapi.staticfiles import StaticFiles
from fastapi.middleware.cors import CORSMiddleware
from fastapi.responses import FileResponse

app = FastAPI()

# Configuración CORS (¡IMPORTANTE!)
app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Permite todas las conexiones
    allow_methods=["*"],
    allow_headers=["*"],
)

# Montar archivos estáticos
app.mount("/static", StaticFiles(directory="static"), name="static")

# Preguntas de dificultad media
preguntas = [
    {
        "pregunta": "¿Qué es un interés compuesto?",
        "opciones": [
            "Interés sobre el capital inicial",
            "Interés sobre capital + intereses acumulados",
            "Un tipo de préstamo bancario"
        ],
        "respuesta": 1,
        "explicacion": "✅ Correcto! El interés compuesto se calcula sobre el capital inicial más los intereses acumulados."
    },
    {
        "pregunta": "¿Qué es un fondo de emergencia?",
        "opciones": [
            "Dinero para vacaciones",
            "Ahorros para imprevistos",
            "Inversión en la bolsa"
        ],
        "respuesta": 1,
        "explicacion": "✅ Correcto! Un fondo de emergencia cubre gastos inesperados sin necesidad de endeudarte."
    }
]

# Ruta principal
@app.get("/")
def inicio():
    return FileResponse("static/juego_medio.html")

# API para el juego
@app.get("/pregunta_media/{id}")
def obtener_pregunta(id: int):
    if 0 <= id < len(preguntas):
        return preguntas[id]
    return {"error": "No hay más preguntas"}

@app.get("/verificar_media/{id}/{respuesta}")
def verificar_respuesta(id: int, respuesta: int):
    if 0 <= id < len(preguntas):
        return {
            "correcta": preguntas[id]["respuesta"] == respuesta,
            "explicacion": preguntas[id]["explicacion"]
        }
    return {"error": "Pregunta no válida"}