from fastapi import FastAPI
from fastapi.staticfiles import StaticFiles
from fastapi.responses import FileResponse

app = FastAPI()

# Configuración para servir archivos estáticos
app.mount("/static", StaticFiles(directory="static"), name="static")

# Datos del juego financiero
preguntas = [
    {
        "pregunta": "¿Qué es un ahorro?",
        "opciones": ["Gastar todo el dinero", "Guardar dinero para el futuro", "Pedir prestado"],
        "respuesta": 1
    },
    {
        "pregunta": "¿Qué es un presupuesto?",
        "opciones": ["Un plan para gastar dinero", "Un tipo de inversión", "Un banco"],
        "respuesta": 0
    }
]
from fastapi.middleware.cors import CORSMiddleware  # ¡Nuevo import!

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],  # Permite todos los orígenes (en desarrollo)
    allow_methods=["*"],
    allow_headers=["*"],
)


# Ruta PRINCIPAL que sirve tu juego HTML
@app.get("/")
def inicio():
    return FileResponse("static/juego_facil.html")

# API para el juego
@app.get("/obtener_pregunta/{id}")
def obtener_pregunta(id: int):
    if 0 <= id < len(preguntas):
        return preguntas[id]
    return {"error": "No hay más preguntas"}

@app.get("/verificar_respuesta/{id}/{respuesta}")
def verificar_respuesta(id: int, respuesta: int):
    if 0 <= id < len(preguntas):
        return {
            "correcta": preguntas[id]["respuesta"] == respuesta,
            "explicacion": "¡Correcto! Ahorrar es guardar dinero para el futuro" if preguntas[id]["respuesta"] == respuesta else "Incorrecto, sigue aprendiendo"
        }
    return {"error": "Pregunta no válida"}