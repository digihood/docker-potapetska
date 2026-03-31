import { useState } from "react";
import { Header } from "../components/Header";
import { Footer } from "../components/Footer";
import { Link } from "react-router";

// Gallery images
const GALLERY_IMAGES = [
  "https://images.unsplash.com/photo-1750005163191-e67625d6fb63?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  "https://images.unsplash.com/photo-1759355533380-de485f5ea524?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  "https://images.unsplash.com/photo-1747926836645-bd594587ffb0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  "https://images.unsplash.com/photo-1633699587349-e8524f734bb6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  "https://images.unsplash.com/photo-1764896121696-b41cd1bc30e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  "https://images.unsplash.com/photo-1646469338837-f160fb8c4f3d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
];

// Similar projects
const SIMILAR_PROJECTS = [
  {
    title: "Rekonstrukce VD Orlík",
    category: "Stavební práce",
    year: "2024",
    image: "https://images.unsplash.com/photo-1646469338837-f160fb8c4f3d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  },
  {
    title: "Oprava pilířů mostu Barrandov",
    category: "Vodní infrastruktura",
    year: "2023",
    image: "https://images.unsplash.com/photo-1761953744460-c81835c1af7e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  },
  {
    title: "Sanace Libeňského mostu",
    category: "Stavební práce",
    year: "2023",
    image: "https://images.unsplash.com/photo-1633699587349-e8524f734bb6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080",
  },
];

export function ProjectKarlovMostPage() {
  const [selectedImage, setSelectedImage] = useState(0);
  const [hoveredProject, setHoveredProject] = useState<number | null>(null);

  return (
    <div
      style={{
        fontFamily: "'Barlow', sans-serif",
        overflowX: "hidden",
        minWidth: "320px",
      }}
    >
      <Header />

      <main>
        {/* Hero Section */}
        <section
          style={{
            background: "linear-gradient(135deg, #033869 0%, #022d5e 100%)",
            padding: "140px 0 80px",
            position: "relative",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6" style={{ position: "relative", zIndex: 1 }}>
            <div style={{ maxWidth: "800px" }}>
              <div
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "20px",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#fcdb00",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Referenční projekt
                </span>
              </div>
              <h1
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2.5rem, 5vw, 4rem)",
                  fontWeight: 800,
                  color: "#ffffff",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                  marginBottom: "20px",
                }}
              >
                Sanace pilířů Karlova mostu
              </h1>
              <p
                style={{
                  color: "rgba(226,232,240,0.85)",
                  fontSize: "1.15rem",
                  lineHeight: 1.7,
                }}
              >
                Komplexní podvodní sanace historických pilířů ikonického pražského mostu s využitím
                pokročilých technologií a materiálů.
              </p>
            </div>
          </div>
        </section>

        {/* Gallery + Project Info Section */}
        <section
          style={{
            background: "#ffffff",
            padding: "80px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "1.2fr 0.8fr",
                gap: "64px",
                alignItems: "start",
              }}
              className="lg:grid-cols-[1.2fr_0.8fr] grid-cols-1"
            >
              {/* Left: Gallery */}
              <div>
                {/* Main image */}
                <div
                  style={{
                    width: "100%",
                    height: "500px",
                    borderRadius: "4px",
                    overflow: "hidden",
                    marginBottom: "20px",
                    border: "1px solid rgba(3,56,105,0.1)",
                  }}
                >
                  <img
                    src={GALLERY_IMAGES[selectedImage]}
                    alt={`Projekt ${selectedImage + 1}`}
                    style={{
                      width: "100%",
                      height: "100%",
                      objectFit: "cover",
                      display: "block",
                    }}
                  />
                </div>

                {/* Thumbnails */}
                <div
                  style={{
                    display: "grid",
                    gridTemplateColumns: "repeat(6, 1fr)",
                    gap: "12px",
                    marginBottom: "32px",
                  }}
                >
                  {GALLERY_IMAGES.map((img, i) => (
                    <button
                      key={i}
                      onClick={() => setSelectedImage(i)}
                      style={{
                        width: "100%",
                        height: "80px",
                        borderRadius: "3px",
                        overflow: "hidden",
                        border: selectedImage === i ? "2px solid #fcdb00" : "1px solid rgba(3,56,105,0.1)",
                        cursor: "pointer",
                        padding: 0,
                        background: "transparent",
                        transition: "all 0.2s",
                        opacity: selectedImage === i ? 1 : 0.6,
                      }}
                      onMouseEnter={(e) => {
                        if (selectedImage !== i) {
                          (e.currentTarget as HTMLElement).style.opacity = "0.85";
                        }
                      }}
                      onMouseLeave={(e) => {
                        if (selectedImage !== i) {
                          (e.currentTarget as HTMLElement).style.opacity = "0.6";
                        }
                      }}
                    >
                      <img
                        src={img}
                        alt={`Thumbnail ${i + 1}`}
                        style={{
                          width: "100%",
                          height: "100%",
                          objectFit: "cover",
                          display: "block",
                        }}
                      />
                    </button>
                  ))}
                </div>

                {/* CTA Buttons */}
                <div style={{ display: "flex", gap: "16px", flexWrap: "wrap" }}>
                  <Link
                    to="/kontakt"
                    style={{
                      display: "inline-flex",
                      alignItems: "center",
                      gap: "10px",
                      background: "#fcdb00",
                      color: "#033869",
                      fontFamily: "'Barlow', sans-serif",
                      fontSize: "0.85rem",
                      fontWeight: 700,
                      letterSpacing: "0.1em",
                      textTransform: "uppercase",
                      padding: "14px 28px",
                      borderRadius: "3px",
                      textDecoration: "none",
                      transition: "all 0.2s",
                    }}
                    onMouseEnter={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "#e5c500";
                      (e.currentTarget as HTMLElement).style.boxShadow = "0 6px 24px rgba(252,219,0,0.4)";
                    }}
                    onMouseLeave={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "#fcdb00";
                      (e.currentTarget as HTMLElement).style.boxShadow = "none";
                    }}
                  >
                    Poptejte podobný projekt
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                      <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                  </Link>

                  <a
                    href="#"
                    download="reference-karluv-most.pdf"
                    style={{
                      display: "inline-flex",
                      alignItems: "center",
                      gap: "10px",
                      background: "#ffffff",
                      color: "#033869",
                      fontFamily: "'Barlow', sans-serif",
                      fontSize: "0.85rem",
                      fontWeight: 700,
                      letterSpacing: "0.1em",
                      textTransform: "uppercase",
                      padding: "14px 28px",
                      borderRadius: "3px",
                      textDecoration: "none",
                      border: "2px solid #033869",
                      transition: "all 0.2s",
                    }}
                    onMouseEnter={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "#033869";
                      (e.currentTarget as HTMLElement).style.color = "#ffffff";
                      (e.currentTarget as HTMLElement).style.boxShadow = "0 6px 24px rgba(3,56,105,0.3)";
                    }}
                    onMouseLeave={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "#ffffff";
                      (e.currentTarget as HTMLElement).style.color = "#033869";
                      (e.currentTarget as HTMLElement).style.boxShadow = "none";
                    }}
                  >
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                      <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3" />
                    </svg>
                    Stáhnout referenci
                  </a>
                </div>
              </div>

              {/* Right: Project Info */}
              <div>
                <h2
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.6rem",
                    fontWeight: 800,
                    color: "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.04em",
                    marginBottom: "32px",
                  }}
                >
                  Informace o projektu
                </h2>

                <div style={{ display: "flex", flexDirection: "column", gap: "28px" }}>
                  {[
                    { label: "Datum realizace", value: "Červen – Září 2025" },
                    { label: "Lokace", value: "Praha 1, Karlův most" },
                    { label: "Náklady", value: "12,4 mil. Kč" },
                    { label: "Poptavatel", value: "Magistrát hlavního města Prahy" },
                    { label: "Tým", value: "8 potápěčů, 3 technici" },
                    { label: "Počet ponorů", value: "142 ponorů" },
                    { label: "Maximální hloubka ponorů", value: "12,5 m" },
                  ].map((item, i) => (
                    <div key={i}>
                      <div
                        style={{
                          color: "#9ca3af",
                          fontSize: "0.7rem",
                          fontWeight: 700,
                          letterSpacing: "0.14em",
                          textTransform: "uppercase",
                          marginBottom: "8px",
                        }}
                      >
                        {item.label}
                      </div>
                      <div
                        style={{
                          fontFamily: "'Barlow Condensed', sans-serif",
                          fontSize: "1.35rem",
                          fontWeight: 700,
                          color: "#033869",
                          letterSpacing: "0.02em",
                          lineHeight: 1.3,
                        }}
                      >
                        {item.value}
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Services Used Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "80px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ marginBottom: "48px" }}>
              <div
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Realizované služby
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Použité technologie a služby
              </h2>
            </div>

            <div
              style={{
                display: "grid",
                gridTemplateColumns: "repeat(3, 1fr)",
                gap: "20px",
              }}
              className="lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1"
            >
              {[
                {
                  title: "Stavební potápěčské práce",
                  description: "Podvodní sanace a zpevnění pilířů, aplikace speciálních směsí",
                  link: "/sluzby/stavebni-potapecske-prace",
                },
                {
                  title: "Video & fotodokumentace",
                  description: "Detailní podvodní inspekce a dokumentace stavu konstrukce",
                  link: "#",
                },
                {
                  title: "Speciální práce",
                  description: "Práce na kulturní památce s historickým významem",
                  link: "#",
                },
                {
                  title: "Soudní znalec",
                  description: "Znalecké posudky a dokumentace stavu před rekonstrukcí",
                  link: "#",
                },
                {
                  title: "Strojní práce",
                  description: "Podvodní bagr pro odstranění nánosů a výkopové práce",
                  link: "#",
                },
                {
                  title: "Průmyslové nádrže",
                  description: "Aplikace speciálních hydroizolačních materiálů",
                  link: "#",
                },
              ].map((service, i) => (
                <Link
                  key={i}
                  to={service.link}
                  style={{
                    background: "#ffffff",
                    border: "1px solid rgba(3,56,105,0.1)",
                    borderRadius: "4px",
                    padding: "28px 24px",
                    textDecoration: "none",
                    display: "flex",
                    flexDirection: "column",
                    gap: "10px",
                    transition: "all 0.25s",
                    position: "relative",
                  }}
                  onMouseEnter={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.borderColor = "#fcdb00";
                    el.style.transform = "translateY(-4px)";
                    el.style.boxShadow = "0 12px 32px rgba(3,56,105,0.1)";
                    // Update button style on card hover
                    const btn = el.querySelector('[data-btn]') as HTMLElement;
                    if (btn) {
                      btn.style.background = "#022d5e";
                      btn.style.boxShadow = "0 4px 16px rgba(3,56,105,0.25)";
                    }
                  }}
                  onMouseLeave={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.borderColor = "rgba(3,56,105,0.1)";
                    el.style.transform = "translateY(0)";
                    el.style.boxShadow = "none";
                    // Reset button style
                    const btn = el.querySelector('[data-btn]') as HTMLElement;
                    if (btn) {
                      btn.style.background = "#033869";
                      btn.style.boxShadow = "none";
                    }
                  }}
                >
                  <h3
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "1.25rem",
                      fontWeight: 800,
                      color: "#033869",
                      textTransform: "uppercase",
                      letterSpacing: "0.02em",
                      lineHeight: 1.2,
                    }}
                  >
                    {service.title}
                  </h3>
                  <p
                    style={{
                      color: "#6b7280",
                      fontSize: "0.9rem",
                      lineHeight: 1.6,
                      margin: 0,
                      flex: 1,
                    }}
                  >
                    {service.description}
                  </p>
                  <div
                    data-btn
                    style={{
                      display: "inline-flex",
                      alignItems: "center",
                      gap: "8px",
                      background: "#033869",
                      color: "#ffffff",
                      borderRadius: "3px",
                      padding: "10px 16px",
                      fontSize: "0.78rem",
                      fontWeight: 700,
                      letterSpacing: "0.04em",
                      alignSelf: "flex-start",
                      marginTop: "8px",
                      transition: "all 0.2s",
                      pointerEvents: "none",
                    }}
                  >
                    Více o službě
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                      <path d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                  </div>
                </Link>
              ))}
            </div>
          </div>
        </section>

        {/* Map + About Section */}
        <section
          style={{
            background: "#ffffff",
            padding: "80px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "1fr 1fr",
                gap: "64px",
                alignItems: "center",
              }}
              className="lg:grid-cols-2 grid-cols-1"
            >
              {/* Left: Map */}
              <div>
                <div style={{ marginBottom: "24px" }}>
                  <div
                    style={{
                      display: "inline-flex",
                      alignItems: "center",
                      gap: "10px",
                      marginBottom: "16px",
                    }}
                  >
                    <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                    <span
                      style={{
                        color: "#033869",
                        fontSize: "0.78rem",
                        fontWeight: 700,
                        letterSpacing: "0.16em",
                        textTransform: "uppercase",
                      }}
                    >
                      Místo realizace
                    </span>
                  </div>
                  <h2
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "clamp(1.8rem, 3vw, 2.5rem)",
                      fontWeight: 800,
                      color: "#033869",
                      textTransform: "uppercase",
                      lineHeight: 1.1,
                    }}
                  >
                    Karlův most, Praha 1
                  </h2>
                </div>

                {/* Map placeholder */}
                <div
                  style={{
                    width: "100%",
                    height: "450px",
                    background: "#f0f2f5",
                    borderRadius: "4px",
                    border: "1px solid rgba(3,56,105,0.1)",
                    display: "flex",
                    alignItems: "center",
                    justifyContent: "center",
                    position: "relative",
                    overflow: "hidden",
                  }}
                >
                  <div style={{ textAlign: "center", zIndex: 1 }}>
                    <svg
                      width="64"
                      height="64"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="#033869"
                      strokeWidth="1.5"
                      style={{ margin: "0 auto 16px" }}
                    >
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <p
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "1.2rem",
                        fontWeight: 700,
                        color: "#033869",
                        textTransform: "uppercase",
                        letterSpacing: "0.05em",
                        marginBottom: "8px",
                      }}
                    >
                      Karlův most
                    </p>
                    <p style={{ color: "#6b7280", fontSize: "0.95rem" }}>Praha 1, Malá Strana – Staré Město</p>
                    <p style={{ color: "#9ca3af", fontSize: "0.85rem", marginTop: "4px" }}>
                      [Interaktivní mapa bude doplněna]
                    </p>
                  </div>
                </div>
              </div>

              {/* Right: About */}
              <div>
                <div style={{ marginBottom: "24px" }}>
                  <div
                    style={{
                      display: "inline-flex",
                      alignItems: "center",
                      gap: "10px",
                      marginBottom: "16px",
                    }}
                  >
                    <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                    <span
                      style={{
                        color: "#033869",
                        fontSize: "0.78rem",
                        fontWeight: 700,
                        letterSpacing: "0.16em",
                        textTransform: "uppercase",
                      }}
                    >
                      O projektu
                    </span>
                  </div>
                  <h2
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "clamp(1.8rem, 3vw, 2.5rem)",
                      fontWeight: 800,
                      color: "#033869",
                      textTransform: "uppercase",
                      lineHeight: 1.1,
                      marginBottom: "20px",
                    }}
                  >
                    Historická rekonstrukce památky UNESCO
                  </h2>
                </div>

                <div style={{ display: "flex", flexDirection: "column", gap: "16px" }}>
                  <p style={{ color: "#42454e", fontSize: "1.02rem", lineHeight: 1.7, margin: 0 }}>
                    Karlův most je nejen ikonickou dominantou Prahy, ale také kritickou součástí městské infrastruktury.
                    Po 650 letech od svého založení vyžadoval most komplexní podvodní sanaci pilířů.
                  </p>
                  <p style={{ color: "#6b7280", fontSize: "0.96rem", lineHeight: 1.7, margin: 0 }}>
                    Projekt zahrnoval detailní inspekci všech 16 pilířů, podvodní čištění, odstranění biologických
                    nánosů a aplikaci speciálních hydroizolačních materiálů odolných proti vodním proudům Vltavy.
                  </p>
                  <p style={{ color: "#6b7280", fontSize: "0.96rem", lineHeight: 1.7, margin: 0 }}>
                    Práce byly realizovány v náročných podmínkách s omezenou viditelností a při zachování provozu mostu.
                    Tým 8 certifikovaných potápěčů pracoval ve směnách, dokumentace byla zpracována ve spolupráci s
                    památkáři.
                  </p>

                  {/* Stats */}
                  <div
                    style={{
                      display: "grid",
                      gridTemplateColumns: "repeat(3, 1fr)",
                      gap: "20px",
                      marginTop: "16px",
                      padding: "24px",
                      background: "#f8f9fb",
                      borderRadius: "4px",
                      border: "1px solid rgba(3,56,105,0.08)",
                    }}
                  >
                    {[
                      { number: "16", label: "pilířů sanováno" },
                      { number: "850m²", label: "plocha prací" },
                      { number: "420", label: "hodin ponorů" },
                    ].map((stat, i) => (
                      <div key={i} style={{ textAlign: "center" }}>
                        <div
                          style={{
                            fontFamily: "'Barlow Condensed', sans-serif",
                            fontSize: "2.2rem",
                            fontWeight: 900,
                            color: "#fcdb00",
                            lineHeight: 1,
                            marginBottom: "6px",
                          }}
                        >
                          {stat.number}
                        </div>
                        <div
                          style={{
                            color: "#6b7280",
                            fontSize: "0.78rem",
                            fontWeight: 600,
                            letterSpacing: "0.06em",
                            textTransform: "uppercase",
                          }}
                        >
                          {stat.label}
                        </div>
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* Similar Projects Section */}
        <section
          style={{
            background: "#f8f9fb",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ marginBottom: "64px" }}>
              <div
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Další reference
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Podobné projekty
              </h2>
            </div>

            <div
              style={{
                display: "grid",
                gridTemplateColumns: "repeat(3, 1fr)",
                gap: "32px",
              }}
              className="lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1"
            >
              {SIMILAR_PROJECTS.map((project, i) => (
                <div
                  key={i}
                  style={{
                    background: "#ffffff",
                    borderRadius: "4px",
                    overflow: "hidden",
                    border: "1px solid rgba(3,56,105,0.08)",
                    transition: "all 0.3s",
                    cursor: "pointer",
                    position: "relative",
                  }}
                  onMouseEnter={(e) => {
                    setHoveredProject(i);
                    const el = e.currentTarget as HTMLElement;
                    el.style.transform = "translateY(-8px)";
                    el.style.boxShadow = "0 16px 48px rgba(3,56,105,0.12)";
                  }}
                  onMouseLeave={(e) => {
                    setHoveredProject(null);
                    const el = e.currentTarget as HTMLElement;
                    el.style.transform = "translateY(0)";
                    el.style.boxShadow = "none";
                  }}
                >
                  <div
                    style={{
                      height: "280px",
                      overflow: "hidden",
                      position: "relative",
                    }}
                  >
                    <img
                      src={project.image}
                      alt={project.title}
                      style={{
                        width: "100%",
                        height: "100%",
                        objectFit: "cover",
                        display: "block",
                        transition: "transform 0.4s",
                        transform: hoveredProject === i ? "scale(1.08)" : "scale(1)",
                      }}
                    />
                    <div
                      style={{
                        position: "absolute",
                        top: 16,
                        right: 16,
                        background: "#fcdb00",
                        color: "#033869",
                        fontSize: "0.7rem",
                        fontWeight: 800,
                        letterSpacing: "0.08em",
                        textTransform: "uppercase",
                        padding: "6px 12px",
                        borderRadius: "2px",
                      }}
                    >
                      {project.year}
                    </div>
                  </div>
                  <div style={{ padding: "28px 24px" }}>
                    <div
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.72rem",
                        fontWeight: 700,
                        letterSpacing: "0.12em",
                        textTransform: "uppercase",
                        marginBottom: "8px",
                      }}
                    >
                      {project.category}
                    </div>
                    <h3
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "1.5rem",
                        fontWeight: 800,
                        color: "#033869",
                        textTransform: "uppercase",
                        lineHeight: 1.2,
                        marginBottom: "16px",
                      }}
                    >
                      {project.title}
                    </h3>
                    <div
                      style={{
                        display: "flex",
                        alignItems: "center",
                        gap: "8px",
                        color: hoveredProject === i ? "#fcdb00" : "#033869",
                        fontSize: "0.82rem",
                        fontWeight: 700,
                        letterSpacing: "0.08em",
                        textTransform: "uppercase",
                        transition: "color 0.2s",
                      }}
                    >
                      Zobrazit projekt
                      <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        strokeWidth="2.5"
                        style={{
                          transition: "transform 0.2s",
                          transform: hoveredProject === i ? "translateX(4px)" : "translateX(0)",
                        }}
                      >
                        <path d="M5 12h14M12 5l7 7-7 7" />
                      </svg>
                    </div>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
}